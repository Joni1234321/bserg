<?php    
    class CMS {
  
        private $css = '
        <link rel="icon" href="img/website_icon.png">

        <link rel="stylesheet" href="style/custompage.css">
        <link rel="stylesheet" href="style/general.css">
        <link rel="stylesheet" href="style/font.css">
        <link rel="stylesheet" href="style/cv.css">
        <link rel="stylesheet" href="style/page.css">
        <link rel="stylesheet" href="style/project.css">
    
        '; 


        function __construct ($title, $headline, $pagecontent) {
            $this->create_webpage($title, $headline, $pagecontent);
        }      

        private function create_webpage ($title, $headline, $pagecontent) {
            echo "<html>";

            $this->create_webpage_template($title);
            $this->create_webpage_content($pagecontent, $headline);

        echo "</html>";
        }


        //Creates the title, css and sidebar
        private function create_webpage_template ($title) {
            echo '  
            <head> 
                <title>' . $title . '</title>
                ' . $this->css . '
            </head>
            <body>
                <div id="web">
                    <div id="navbar"> 
            ';
                
            require('templates/navbar.php');

            echo "</div>"; // Navbar
        }

        //Creates the headline and requires the pagecontent file
        private function create_webpage_content ($pagecontent, $headline) {
            echo '<div id="maincontent">';
            
            echo '
            <a href="index.php" id="maintitle"> <div> <p>' . $headline . '</p> </div> </a>
            <div id="mainbread"> 
            ';                      // Headline

            require($pagecontent);  // Content
            
            echo ' </div> </div>';  // Mainbread & Maincontent
            echo ' </div> </body>'; // Web 
        }

    }
?>