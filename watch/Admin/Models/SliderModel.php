<?php
    class SliderModel extends Database
    {
        public function getSlider()
        {
            $sql = "SELECT * FROM sliders ORDER BY slider_id DESC LIMIT 3";
            return $this->do_sql($sql);
        }
    }

?>