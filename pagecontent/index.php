<?php

    require_once("template_classes/template_page.php");

    $t = new TEMPLATE_PAGE ("1.0.0", "BSERG", "Under Development", "img/projects/bserg.png", array("Website"),  array(""), "https://github.com/Joni1234321/robotarmprojekt");
    $t->create_p("PERSONAL WEBSITE <br> Property of Jonas Vendelbo Hansen");
    $t->create_a("FOR GITHUB PROFILE CLICK HERE", "https://github.com/Joni1234321/");
    $t->create_img("img/car.jpg", "profilepicture", "CAR");
    $t->create_p("THIS WEBSITES CONTAINS PROJECTS MADE BY SAID PERSON");

    $t->end_page();



    


?>