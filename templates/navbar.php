<?php


    template_navsection_link_start("projects", "projects.php","PROJECTS");
    template_navbar_link("index.php", "BSERG");
    template_navbar_link("myweb.php", "MyWeb");
    template_navbar_link("refresher.php", "Refresher");
    template_navbar_link("av6.php", "AV6");
    template_navbar_link("robotarm.php", "Robotarm");

    template_navsection_link_end();


    template_navsection_link_start("aboutme", "aboutme.php", "ABOUT ME");
    template_navbar_link("cv.php", "CV");
    template_navsection_link_end();



    function template_navbar_link ($location, $text) {
        echo ' 
        <a href="' . $location . '">
            <div class="navproject"> 
                <p>' . $text . '</p>
            </div>
        </a>
        ';
    }


    function template_navsection_link_start ($id, $location, $title){
        echo ' 
        <div class="navsection" id="' . $id . '">
        <a href="' . $location . '"> <div class="navtitle"> <p> ' . $title . '</p> </div> </a>
        ';
    }
    function template_navsection_link_end () {
        echo '</div>'; // Navsection
    }

?>