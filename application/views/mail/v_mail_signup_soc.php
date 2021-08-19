<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1 style="margin-bottom: 20px;">Soundnova accound created</h1>

<p>Dear customer!</p>

<p>We have created account for you as you been registered on Soundnova</p>

<p>Please use your registration data for entering private account: </p>

<p>Login: <b><?php echo $createdUser['email']; ?></b></p>
<p>Password: <b><?php echo $createdUser['password']; ?></b></p>

<p>
	Thanks for trusting us!
</p>
