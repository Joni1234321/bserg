<?php
    require_once("template_classes/template_cv.php");
    $cv = new TEMPLATE_CV (); 


    echo '<div class="cv">';

    echo '<b> UDDANNELSE </b>';
    $cv->cv_section("skole", "img/skole.jpg", "Virring Skole <br> 0. - 9. klasse", "[2006 - 2016]");
    $cv->cv_section("efterskole", "img/efterskole.jpg", "Skanderup Efterskole (IT og Teknologi) <br>10. klasse", "[2016 - 2017]");
    $cv->cv_section("htx", "img/htx.jpg", "HTX Skanderborg (Teknologi A og Design B) <br> 1.G - 3.G ", "[2017 - nu]");

    echo '<b> ARBEJDE </b>';
    $cv->cv_section("kiermar", "img/kiermar.jpg", "Studiejob ", "[2014 - 2016]");
    $cv->cv_section("foetex", "img/foetex.png", "Studiejob (Salgsasssistent) ", "[2018 - nu]");
    
    echo '</div>';
?>