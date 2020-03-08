<?php
    require_once("template_classes/template_page.php");

    $t = new TEMPLATE_PAGE ("1.0", "Robotarm", "Completed", "img/test.jpg", array("Electronics", "Robotics"), array(""), "https://github.com/Joni1234321/robotarmprojekt");
    $t->create_p("Robotarm projektet er et projekt lavet på skolen i teknikfaget \"RobotTeknologi\"");
    $t->create_p("Projektet havde mange krav");
    $t->create_p("Vi lavede en robot, der ville kunne trykke på et tastatur");
    
    $t->end_page();
    
?>