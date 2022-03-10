<?php
    require_once "./config/APP.php";
    require_once "./controllers/viewsController.php";

    $template = new viewsController();
    $template -> get_template_controller();