<?php
    require_once("template_classes/template_page.php");

    $t = new TEMPLATE_PAGE ("1.0", "About me", "Under Development", "img/test.jpg", array(""));
    $t->create_p("Jonas Vendelbo Hansen");
    $t->create_img("img/aboutme/profile.png", "", "PROFIL BILLEDE");
    $t->create_p("Jeg går i skole på HTX i Skanderborg");
    $t->create_p("Jeg har altid været fascineret af programmering, og har haft det som en hobby i løbet af de sidste mange år ");

    $t->create_p("");

    $t->end_page();
    
?>