<?php
    class TEMPLATE_CV {
        public function cv_section ($id, $img, $text, $time)  {
            echo '
            <div class="cv-box" id="' . $id . '">
                <img src="' . $img . '">
                <p> ' . $text . ' </p>
                <p> ' . $time . ' </p>
            </div>
            ';

        }
    }
?>