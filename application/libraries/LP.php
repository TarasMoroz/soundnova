<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class LP {

	private $pubkey = "";
	private $privkey = "";

	public function __construct() {

	$ci =& get_instance();
    $ci->db->select('lpPubKey, lpPrivKey');
    $ci->db->where('id',1);
    $query = $ci->db->get('settings')->row_array();
    
    $this->pubkey = $query['lpPubKey'];
    $this->privkey = $query['lpPrivKey'];

	}

	// принимает array() параметры json строки запроса....
	// отдает array($data, $signature)... два зашифрованных параметра, необходимых для запроса...
	private function get_data_and_signature($params){

		$params["public_key"]  = $this->pubkey;
		//$params["private_key"] = $this->privkey;

		$priv = $this->privkey;

		$json_string = json_encode($params);

		//return $json_string;

		$data = base64_encode($json_string);

		$sign_str = $priv.$data.$priv;
		$signature = base64_encode(sha1($sign_str, 1));

		return array($data, $signature);
	}

	// принимает order_id (номер заказа)... по которому будет проведена оплата и $sum - сумма к оплате
	// возвращает html кнопку форму, для оплаты заказа через liqpay
	public function pay_button($num = false, $sum = false){

		if($num == false) return "error: order_id not defined";
		if($sum == false) return "error: payment amount not defined";

		$ds = $this->get_data_and_signature([
			"version"=>3,
			"action"=>"pay",
			"amount"=>$sum,
			"currency"=>"UAH",
			"description"=>"Оплата заказа #".$num,
			"order_id"=> (string) $num,
			"paytypes"=>"card,privat24",
			"result_url"=>"http://ukroliya-shop.com/ua/pay/?order=".$num
		]);

		return '<form method="POST" action="https://www.liqpay.ua/api/3/checkout" accept-charset="utf-8">
				  <input type="hidden" name="data" value="'.$ds[0].'"/>
				  <input type="hidden" name="signature" value="'.$ds[1].'"/>
				  <input type="image" name="submit" src="/assets/img/lp.png" border="0" alt="Submit"/>
				</form>';
	}
}

?>
