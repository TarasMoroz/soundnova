<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $hashLink = 'https://soundnova.net/email_activate?hash='.md5($email.$activationCode); ?>

<h1 style="margin-bottom: 20px;">Hi!</h1>

<p>Dear User!</p>

<p>Please confirm your email by entering code: <b><?php echo $activationCode; ?></b></p>

<p>
	Or simply follow activation link, to make it automatically: 
	<a href="<?php echo $hashLink; ?>"><?php echo $hashLink; ?></a>
</p>
