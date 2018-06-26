<?
class Controller{

	public function getLocationByID($locationID){
		$this->locationID = $locationID;

		$getLocationByID = new Model();
		$getLocationByID = $getLocationByID->getLocationByID($this->locationID);
		return $getLocationByID;
	}

	public function getUserByID($userID){
		$this->userID = $userID;

		$getUserByID = new Model();
		$getUserByID = $getUserByID->getUserByID($this->userID);
		return $getUserByID;
	}

	public function getTimePunchByID($userID,$locationID){
		$this->userID 		= $userID;
		$this->locationID 	= $locationID;

		$getTimePunchByID = new Model();
		$getTimePunchByID = $getTimePunchByID->getTimePunchByID($this->userID,$this->locationID);
		return $getTimePunchByID;
	}

	public function getTotalWorkedHours($userID,$locationID){
		$this->userID 		= $userID;
		$this->locationID 	= $locationID;

		$getTotalWorkedHours = new Model();
		$getTotalWorkedHours = $getTotalWorkedHours->calcWorkedHours($this->userID,$this->locationID);
		return $getTotalWorkedHours;
	}
}
?>