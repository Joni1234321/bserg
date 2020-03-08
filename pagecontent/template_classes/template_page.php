<?php 
    class TEMPLATE_PAGE {
        function __construct ($version = "1.0", $title = "PAGE META", $status = "On Pause", $src = "img/test.jpg", $tags = array(""), $resources = array("resources/res1.pdf", "resources/res2.pdf"), $git ="") {
            $this->meta_page($version, $title, $status, $src, $tags, $resources, $git);

        }      
        
        public function create_img ($src, $id="", $t = "") {
            echo '<div class="page img">';
            echo '<img id="' . $id . '" src="'. $src . '">';
            echo '<p>' . $t . '</p>';
            echo '</div>';
        }
        public function create_p($t) {
            echo '<p> ' . $t . '</p>';
        }
        public function create_demo($link = "index.php"){
            echo '
            <form class="demo" target="_blank" action="' . $link . '">
            <input type="submit" value="TRY DEMO" />
            </form> ';
        }

        public function create_resources($resources) {
            foreach ($resources as $res) { // Array Resources
                $seperated = explode(".", $res);
                $extension = end ($seperated);
                echo 
                '<div>
                    <a target="_blank" href="' . $res . '" class="resource ' . $extension .'"> </a>
                    <p class="resource filename"> </p>
                </div>';
            }        
        }
        public function create_tags ($tags){
            foreach ($tags as $tag) { // Array Tags
                echo '<p> ' . $tag . ' </p>';
            }
        }

        public function meta_page ($version, $title, $status, $src, $tags, $resources, $git) {
            echo'
            <div class="page container"> 
                <div class="meta-page"> 
                    <div class="meta version"> <p>' . $version . '</p> </div>';
                    if ($git != "") { echo '<div class="meta git"> <a target="_blank" href="' . $git . '"> GitHub </a> </div>'; }
            echo '  <div class="meta title"> <p>' . $title . '</p> </div>
                    <div class="meta status"> <p> Status: ' . $status . '</p> </div> 
                    <img class="meta img" src="' . $src . '">
                    <div class="meta resources">';
                    $this->create_resources($resources);

            echo '  </div> 
                    <div class="meta tags"> '; // Resources 
                    $this->create_tags($tags);
            echo '  </div>
                </div>    
                <div class="page content">
            ';
            // Meta Tags
            // Meta Page
        }
        public function end_page (){
            echo '</div> 
            </div>';
            // Page content
            // Page container
        }
    }

?>
