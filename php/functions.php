<?php
function addSchedMsg() {
    if(isset($_POST['submit'])) {
        $valid = new validate(); 
        $schedule_time = $_POST['schedule'];

        $valid->valAddSched($schedule_time);
    }
}

?>