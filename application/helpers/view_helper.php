<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('v_aside'))
{
    function v_aside($s, $cats, $params) // настройки, параметры
    {
		$lang =  $_SESSION['lang'];
		$CI = &get_instance();

		$data['s'] = $s;
		$data['cats'] = $cats;
		$data['lang'] = $lang;
		$data['params'] = $params;

    	return $CI->load->view('desktop/blocks/v_aside', $data, true);
    }
}

// Цена в ГРН
if( ! function_exists('price_grn'))
{
    function price_grn($price, $kurs)
    {
    	$price = (float) $price;
    	$kurs = (float) $kurs;

    	return ceil($price*$kurs);
    }
}

if ( ! function_exists('wEnd'))
{
    function wEnd($number, $endingArray=array("отзыв","отзыва", "отзывов"))
    {
		$number = abs($number) % 100;
	    if ($number>=11 && $number<=19) {
	        $ending=$endingArray[2];
	    } else {
	        $i = $number % 10;
	        switch ($i)
	        {
	            case (1): $ending = $endingArray[0]; break;
	            case (2):
	            case (3):
	            case (4): $ending = $endingArray[1]; break;
	            default: $ending = $endingArray[2];
	        }
	    }
	    return $ending;
    }
}

// замещает элемент масива другим значением и возвращает новый массив
if ( ! function_exists('changeQueryVal'))
{
    function changeQueryVal($newVals, $array = [])
    {
		$newArray = $array;
		foreach($newVals as $key => $val){
			$newArray[$key] = $val;
		}
		
	    return http_build_query($newArray);
    }
}

// замещает элемент масива другим значением и возвращает новый массив
if ( ! function_exists('viewedProducts'))
{
    function viewedProducts()
    {
    	$viewed = [];

    	$CI = &get_instance();

		if($_COOKIE['viewed']){
			
			$viewedIds = json_decode($_COOKIE['viewed']);
			$pviewed = $CI->db->query("SELECT p.id, p.name_ru, p.name_ua, p.alias, p.stock, p.price, p.price_old, IF(p.price_old > p.price, CEIL((p.price_old-p.price)/(p.price_old/100)), 0) discount_percent, count(c.id) cnt_comments, TRUNCATE(AVG(c.value), 1) avg_rate FROM product p LEFT JOIN comment c ON c.id_product = p.id  WHERE p.id IN (".implode(',',$viewedIds).") GROUP BY p.id")->result_array();
			
			if(count($pviewed)){
				foreach($viewedIds as $vId){
					foreach($pviewed as $p){
						if($vId == $p['id']){
							$viewed[] = $p;
							break;
						}
					}
				}
			}
		}
		
		return $viewed;
    }
}

// сохраняем просмотр страницы, сущности...
if ( ! function_exists('write_page_view'))
{
	// makes an array of translation aliases
	function write_page_view($id_item, $item) // 123, vendor, gadget, similar, versus, rate
	{
		$CI = &get_instance();

		// 1. Раз в месяц !!! если первое число например.
		// 2. Чистить стату если старше 3х месяцев () или вынести в отдельных крон.

		$w = date('W');
		$m = date('m');
		$y = date('Y');

		$query = "SELECT * FROM views WHERE week = ".$w." AND month = ".$m." AND year = ".$y." AND id_item = ".$id_item." AND item = '".$item."'";
		$vws = $CI->db->query($query)->row_array();

		// +1
		if($vws['id']){
			// добавляем +! к просмотрам

			$query = "UPDATE views SET cnt = cnt + 1 WHERE id = ".$vws['id'];
			$CI->db->query($query);
		} else {
			// создаем новую строку.
			$query = "INSERT IGNORE INTO views (id_item, item, cnt, week, month, year, ts) VALUES (".$id_item.",'".$item."',1,".$w.",".$m.",".$y.",".strtotime('now').")";
			$CI->db->query($query);
		}

	}
}

?>