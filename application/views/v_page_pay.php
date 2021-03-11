
<style>
#pay {width:840px; margin:200px auto;}
#pay h1 {font-size: 35px; font-family: Gilroy-Bold; margin-bottom: 50px; text-align: center;}
#pay h2 {font-size: 24px; font-family: Gilroy-Bold; margin-bottom: 30px; margin-top:50px; text-align: center;}
#pay a {display:block; width:250px; padding:10px; margin:50px auto;}

@media only screen and (max-width: 1200px) {
  #pay { width:calc(100% - 100px); margin:150px 50px; }
  #pay h1 {font-size: 22px; margin-bottom: 20px; }
  #pay h2 {font-size: 20px; margin-top: 20px; }
}
</style>

<div id="pay">
	<h1> Дякуємо, Ваше замовлення сформовано! </h1>
	<h2> Оплатити через LiqPay </h2>

	<a href="#">
		<?=$data['pay_button']?>
	</a>
</div>