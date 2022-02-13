<?php

class main_model extends Model {
	private $con;

	public function increase_view(){
		$date = $this->get_date();
		$connection = $this->get_connection();
		$res = $connection->query("SELECT * FROM `view` WHERE `date`='$date'");
		if ($res != null && $res->num_rows > 0){
			//update
			$result = $res->fetch_assoc();
			$count = (int)$result['view_count'];
			$count += 1;
			if ($connection->query("UPDATE `view` SET `date`='$date',`view_count`='$count' WHERE `date`='$date'")){
				return true;
			}else{
				return false;
			}
		}else{
			//add
			if ($connection->query("INSERT INTO `view` (`date`,`view_count`) VALUES ('$date','1')")){
				return true;
			}else{
				return false;
			}
		}
	}

	function get_date(){
		include_once 'calender.php';
		$dat = new persian_calendar();
		$date = $dat->date("Y/m/d");
		return $date;
	}

	function get_connection(){
		if ($this->con == null){
			$this->con = new mysqli("localhost","root","","quiz");
			mysqli_set_charset($this->con,"utf8");
		}
		return $this->con;
	}
}

?>
