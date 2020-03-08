<?php 
    require_once("template_classes/template_projects.php");
    $template_projects = new TEMPLATE_PROJECTS (); 

    $template_projects->project_section_start("Websites");
    $template_projects->create_project ("bserg", "index.php", "img/projects/bserg.png", "BSERG", 
        array("HTML", "JS", "PHP", "MYSQL"));
    $template_projects->create_project ("myweb", "myweb.php", "img/projects/myweb.png", "MyWeb",
        array("HTML", "JS", "JQUERY", "PHP", "MYSQL"));
    $template_projects->create_project ("refresher", "refresher.php", "img/projects/refresher.png", "Refresher",
    array("HTML", "JS", "PHP", "MYSQL"));

    $template_projects->project_section_end();

    $template_projects->project_section_start("Electronics");
    $template_projects->create_project ("av6", "av6.php", "img/projects/av6.png", "AV6",
        array("Analog"));
    $template_projects->create_project ("robotarm", "robotarm.php", "img/projects/robotarm.png", "Robotarm projekt",
        array("C"));

    $template_projects->project_section_end();


    
?>
