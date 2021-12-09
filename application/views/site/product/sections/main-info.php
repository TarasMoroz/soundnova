<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  // Get path to the section folder, for load additional views
  $pathToCurrentSection = $basePath . basename(__DIR__) . DIRECTORY_SEPARATOR . basename(__FILE__, ".php");

  // TODO: CAN WE USE $deviceType PARAM for load view properly???
  // $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . $deviceType); // Load view by device type "desktop" or "mobile"
        
?>
<div class="full-width-container">
  <div class="inner-content-container w-md">

    <div class="view-mobile">
      <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'mobile', ['pathToCurrentSection' => $pathToCurrentSection]); ?>
    </div>
    <div class="view-desktop">
      <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'desktop', ['pathToCurrentSection' => $pathToCurrentSection]); ?>
    </div>

  </div>
</div>