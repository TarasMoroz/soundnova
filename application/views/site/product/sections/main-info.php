<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="product main-info <?= $deviceType ?>">

  <?php
    // Get path to the section folder, for load additional views
    $pathToCurrentSection = $basePath . basename(__DIR__) . DIRECTORY_SEPARATOR . basename(__FILE__, ".php");
    $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . $deviceType); // Load view by device type "desktop" or "mobile"
  ?>

</section>