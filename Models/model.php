<?
class Model{

	//Methods to convert JSON to array

	public function setAllLocation(){
		$locationJson 		= file_get_contents(LOCATION_ENDPOINT);
		$locationDecode 	= json_decode($locationJson,true);

		foreach ($locationDecode as $location) {
			$resultLocation[] = new LocationClass($location);
		}
		return $resultLocation;
	}

	public function setAllUser(){
		$userJson 		= file_get_contents(USERS_ENDPOINT);
		$userDecode 	= json_decode($userJson,true);

		foreach ($userDecode as $userID) {
			foreach ($userID as $user) {
				$resultUser[] = new UserClass($user);
			}			
		}
		return $resultUser;
	}

	public function setAllTimePunch(){
		$timePunchJson 		= file_get_contents(TIME_PUNCHES_ENDPOINT);
		$timePunchDecode 	= json_decode($timePunchJson,true);

		foreach ($timePunchDecode as $timePunch) {
			$resultTimePunch[] = new TimePunchClass($timePunch);
		}
		return $resultTimePunch;
	}


	//Methods to get values by a given ID

	public function getLocationByID($locationID){
		$this->locationID 	= $locationID;

		$getAllLocation 	= $this->setAllLocation();

		for ($i=0; $i < count($getAllLocation); $i++) { 
			if ($getAllLocation[$i]->id == $locationID) {
				$resultLocationByID[] = $getAllLocation[$i];
			}
		}
		return $resultLocationByID;
	}

	public function getUserByID($userID){
		$this->userID 	= $userID;

		$getAllUser 	= $this->setAllUser();

		for ($i=0; $i < count($getAllUser); $i++) { 
			if ($getAllUser[$i]->id == $userID) {
				$resultUserByID[] = $getAllUser[$i];
			}
		}
		return $resultUserByID;
	}

	public function getTimePunchByID($userID,$locationID){
		$this->userID 		= $userID;
		$this->locationID 	= $locationID;

		$getAllTimePunch 	= $this->setAllTimePunch();

		for ($i=0; $i < count($getAllTimePunch); $i++) { 
			if ($getAllTimePunch[$i]->userId == $userID && $getAllTimePunch[$i]->locationId == $locationID) {
				$resultTimePunchByID[] = $getAllTimePunch[$i];
			}
		}
		return $resultTimePunchByID;
	}


	//Methods to calculate total worked hours

	public function calcWorkedHours($userID,$locationID) {
		$this->clockedStart  = 0;
		$this->clockedEnd	 = 0;
		$this->diffWkdHours	 = 0;
		$this->totalWkdHours = 0;

		$getTimePunchByID = $this->getTimePunchByID($userID,$locationID);
		
		for ($i=0; $i < count($getTimePunchByID); $i++) { 
			$this->clockedStart 	= strtotime($getTimePunchByID[$i]->clockedIn);
			$this->clockedEnd 		= strtotime($getTimePunchByID[$i]->clockedOut);

			$this->diffWkdHours 	= ($this->clockedEnd - $this->clockedStart) / 3600 % 24;
			$this->totalWkdHours 	+= $this->diffWkdHours;
		}
		return $this->totalWkdHours;
	}
}
?>