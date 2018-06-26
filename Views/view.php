<?
class View{

	public function returnView(){
		$view = MAIN_VIEW;
		require($view);
	}

	public function returnLocation($locationID){
		$this->locationID = $locationID;

		if (isset($this->locationID)) {
			$returnLocation = new Controller();
			$returnLocation = $returnLocation->getLocationByID($this->locationID);
		}

		return $returnLocation;
	}

	public function returnUser($userID){
		$this->userID = $userID;

		if (isset($this->userID)) {
			$returnUser = new Controller();
			$returnUser = $returnUser->getUserByID($this->userID);
		}

		return $returnUser;
	}

	public function returnTimePunch($userID,$locationID){
		$this->userID 		= $userID;
		$this->locationID 	= $locationID;

		if (isset($this->userID) && isset($this->locationID)) {
			$returnTimePunch = new Controller();
			$returnTimePunch = $returnTimePunch->getTimePunchByID($this->userID,$this->locationID);
		}

		return $returnTimePunch;
	}

	public function returnTotalWorkedHours($userID,$locationID){
		$this->userID 		= $userID;
		$this->locationID 	= $locationID;

		if (isset($this->userID) && isset($this->locationID)) {
			$returnTotalWorkedHours = new Controller();
			$returnTotalWorkedHours = $returnTotalWorkedHours->getTotalWorkedHours($this->userID,$this->locationID);
		}

		return $returnTotalWorkedHours;
	}
}
?>