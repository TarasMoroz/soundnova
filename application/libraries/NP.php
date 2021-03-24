<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class NP {

  private $key = "";

	public function __construct(){

    $ci =& get_instance();
    $ci->db->select('npKey');
    $ci->db->where('id',1);
    $query = $ci->db->get('settings')->row_array();
    
    $this->key = $query['npKey'];
	}

  public function request($body){
      $request = $this->postCURL(
        'https://api.novaposhta.ua/v2.0/json/', 
        $body,
        array('Content-Type' => 'application/json')
      );
      //$request->post('{"modelName":"Common","calledMethod":"getPackList"}');
      //$request->body($body);

      return $request;
  }

  // возвращает список городов (сам ответ новой пошты) в формате json
  public function getJsonCities(){
    $cities = $this->request('{"modelName": "Address","calledMethod": "getCities","apiKey": "'.$this->key.'"}');
    return $cities;
  }

  // возвращает список всех отделений в формате json
  public function getJsonWarehouses(){
    $warehouses = $this->request('{"modelName": "AddressGeneral","calledMethod": "getWarehouses","apiKey": "'.$this->key.'"}');
    return $warehouses;
  }


	public function test() {
    return 'test from NP lib: ' . $this->key ;
  }

  public function postCURL($_url, $_param, $headers)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $_param);    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $output=curl_exec($ch);

    curl_close($ch);

    return $output;
  }
}

?>
