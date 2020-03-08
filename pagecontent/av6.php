<?php
    require_once("template_classes/template_page.php");

    $t = new TEMPLATE_PAGE ("1.0", "AV6", "Completed", "img/projects/av6.png", array("Analog", "Electronics"));
    $t->create_p("AV6 is a project created to make \"space\"");
    $t->create_img("img/projects/av6/3d_model.png", "model", "3D PRINTED PACKAGING");
    $t->create_p("When the button is held down, the speaker will activate after 6 seconds");
    $t->create_img("img/projects/av6/schematic_0_1.png", "schematic", "Schematic");
    $t->create_p("");

    $t->end_page();
?>