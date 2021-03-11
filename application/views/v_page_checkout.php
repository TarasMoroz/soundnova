<style>
	#checkout {width:640px; margin:50px auto 100px auto; text-align: left;}
	#checkout h1 {font-size: 35px; font-family: Gilroy-Bold; margin-bottom: 50px;}
	#checkout h2 {font-size: 24px; font-family: Gilroy-Bold; margin-bottom: 30px; margin-top:50px;}
	#checkout h2 span {display: inline-block; float:left;}
	#checkout p {font-size: 22px; font-family: Gilroy; color:#666; margin-bottom: 20px; margin-top:20px;}
	#checkout input { height:30px; width:540px; border:0; border-bottom:1px solid #666; padding:5px 5px; color:#333; font-size:20px; margin:5px 0 0 0; }
	#checkout .imsg { height:20px; line-height: 15px; font-size: 16px; margin-bottom:10px; color:#E93C3C; }
	.pa-inf { color:#000 !important; }
	.pa-grn { color:#5EEA7C !important; }
	.pa-red { color:#E93C3C !important; }
	#checkout #nplogo {display: block; margin:20px 0;}

	#mclogo, #vslogo {display: inline-block; float:left; margin-bottom: -15px; margin-left: 25px;}

	#order { display: block; width:320px; text-align: center; background: #FFD100;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
border-radius: 15px; height:50px; line-height: 50px; text-decoration: none; text-transform: uppercase; color:#fff; margin:100px auto; font-size:20px; }

	#departments { width:500px; height:auto; max-height:400px; overflow-x: hidden; overflow-y: auto; padding:20px; margin:10px 0 0 0; }
	#departments a { display: block; font-size:16px; color:#666; text-decoration: none; height:30px; line-height: 30px; transition: 0.2s; white-space: nowrap;}
	#departments a:hover { color:#000; transition: 0.3s; }

	#cities { width:540px; font-size:16px; height:auto; overflow-x: hidden; overflow-y: auto; padding:20px 0; }
	#cities a {display: inline-block; height:30px; line-height: 30px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1); text-decoration: none; border-radius: 4px; padding:0 10px; font-size:16px; color:#000; transition:.2s; margin-right:10px; margin-bottom: 10px; }
	#cities a:hover { transition: .3s; background:#FFD100; color:#fff; }

	@media only screen and (max-width: 1200px) {
  		#checkout { width:100%; margin-bottom: 50px; }
  		#checkout form {width:calc(100% - 30px); margin:0 auto;}
  		#checkout h1 {font-size: 20px; font-family: Gilroy-Bold; margin-bottom:20px;}
		#checkout h2 {font-size: 20px; font-family: Gilroy-Bold; margin-bottom: 20px; margin-top:30px;}
		#checkout p {font-size: 14px; font-family: Gilroy; color:#666; margin-bottom: 10px; margin-top:10px;}
		#checkout input { width:calc(100% - 50px); margin:0 25px; font-size: 14px; }
		#checkout .imsg {margin-left: 30px; font-size: 12px; margin-bottom: 0;}
		#checkout #nplogo {float:right; margin-top: -50px; margin-right: 25px;}
		#order { height:38px; line-height: 38px; font-size: 14px; width:220px; margin:70px auto; }
		#departments { width:calc(100% - 40px); margin-left: 20px; padding:5px; }
		#departments a { font-size: 13px; white-space: normal; line-height: 15px; padding-bottom: 20px; height:auto; white-space: wrap; }
		#cities { width:calc(100% - 40px); margin-left: 20px; font-size: 14px; padding: 10px 0; }
		#cities a {}
		#mclogo, #vslogo {display: none;}
  	}
</style>

<div id="checkout">
	<? if(isset($_COOKIE['cart'])): $cart = json_decode($_COOKIE['cart']); ?>

		<? $goods = (array) $cart->goods; ?>

		<? if(empty($goods)): ?>
			<p>Оформити замовлення не можливо! Ваш кошик порожній!</p>
		<? else: ?>

			<form id="formcheckout">
				<h1>Оформлення замовлення</h1>
				
				<input id="fio" type="text" name="fio" placeholder="ПІБ">
				<div class="imsg" id="fiomsg"></div>

				<input id="phone" type="text" name="phone" placeholder="Телефон">
				<div class="imsg" id="phonemsg"></div>

				<input id="email" type="text" name="email" placeholder="Email">
				<div class="imsg" id="emailmsg"></div>

				<h2>Спосіб доставки</h2>

				<img id="nplogo" src="/assets/img/np.png">

				<input id="city" type="text" name="city" placeholder="Місто">
				<!-- <div class="imsg" id="citymsg"></div> -->

				<div id="cities">
					
				</div>

				<input id="dep" type="text" name="dep" placeholder="Номер відділення">
				<!-- <div class="imsg" id="depmsg"></div> -->

				<div id="departments">
					
				</div>

				<h2>
					<span>Спосіб оплати</span>
					<img id="mclogo" src="/assets/img/mastercard.png">
					<img id="vslogo" src="/assets/img/visa.png">
				</h2>

				<br clear="all">
				<br clear="all">

				<p>Онлайн-оплата через систему LiqPay</p>

				<a id="order" href="#">ОФОРМИТИ ЗАМОВЛЕННЯ</a>

			</form>

		<? endif; ?>

	<? endif; ?>
</div>