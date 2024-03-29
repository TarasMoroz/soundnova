<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Googleplus {

	public function __construct() {

    require APPPATH . "third_party/google-api-php/src/Google/autoload.php";
		$this->client = new Google_Client();

		$this->client->setApplicationName('Calendar Api');

    //Edit this auth config line
		$this->client->setAuthConfigFile(APPPATH . 'config/client_id.json');

    $this->client->addScope(Google_Service_Calendar::CALENDAR);
		$this->client->addScope('profile');

	}

	public function loginUrl() {
    return $this->client->createAuthUrl();
  }

	public function getAuthenticate() {
    return $this->client->authenticate();
  }

	public function getAccessToken() {
    return $this->client->getAccessToken();
  }

	public function setAccessToken() {
    return $this->client->setAccessToken();
  }

	public function revokeToken() {
    return $this->client->revokeToken();
  }

  public function client(){
    return $this->client;
  }

  public function getUser(){
  	$google_ouath = new Google_Service_Oauth2($this->client);
 		return (object)$google_ouath->userinfo->get();
  }

  public function isAccessTokenExpired(){
    return $this->client->isAccessTokenExpired();
  }

}

?>
