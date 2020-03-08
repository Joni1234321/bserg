<?php
    require_once("template_classes/template_page.php");

    $t = new TEMPLATE_PAGE ("0.2", "MYWEB", "On Pause", "img/projects/myweb.png", array("Website"), array(""), "https://github.com/Joni1234321/myweb/");
    
    $t->create_demo("websites/MyWeb/index.php");
    $t->create_p("<b>EXPERIMENTAL<br> WEBSITE IS INCOMPLETE </b>");
    $t->create_p("MyWeb is a website designed using a custom made CMS");
    $t->create_p("Demo User<br>Username: 1234<br>Password: 1234");

    $t->end_page();

?>