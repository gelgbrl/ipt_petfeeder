<?php
include 'insertSched.php';

class validate extends config {
    public function viewer($a) {
		$con = $this->con();
		$sql = $a;
		$data = $con->prepare($sql);
		$data->execute();
		$result = $data->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function valAddSched($schedule_time) {
		$insert = new insertSched($schedule_time);
			if($insert->addSched()) {
				echo '<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
					Successfully added schedule
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
				</div>';
			} else {
				echo '<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
					Error adding schedule
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>	
				</div>';
			}
	}
}
 

?>  