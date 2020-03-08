<?php 
    class TEMPLATE_PROJECTS {

        public function create_project ($id, $location, $img, $title, $languages = array()) {
            echo '
            <a href="' . $location . '"> <div class="project" id="' . $id . '"> 
                <img class="screenshot" src="' . $img . '">
                <div> 
                    <p> ' . $title . ' </p>
                    <div class="languages">
                        <p> TAGS: </p>
                        <div>';
                        
                        foreach ($languages as $la){
                            echo '<p> ' . $la . ' </p>';
                        }
            echo '      </div>
                    </div>
                </div>
            </div> </a>';
        }

        public function project_section_start ($title){
            echo
            '<p class="project-collection-title">' . $title . '</p> <div class="project-collection">';
        }
        public function project_section_end (){
            echo'</div>';
        }

    }

?>
