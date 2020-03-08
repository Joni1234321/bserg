<?php
    require_once("template_classes/template_page.php");


    $t = new TEMPLATE_PAGE ("1.0", "REFRESHER", "Completed", "img/projects/refresher.png", array("Website"),  array(""), "https://github.com/Joni1234321/robotarmprojekt");
    $t->create_demo("websites/MacroElectron/index.html");
    $t->create_p("Purpose: Displaying 5 elements");
    $t->create_p("By writing in the field, you can add an element to the list");
    $t->create_p("You can also remove an element by clicking the slash element");

    $t->create_p("Refresh the elements by clicking the RELOAD button in the top");

    $t->end_page();
?>