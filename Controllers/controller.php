<?
class Controller{

	public $resultLocation;
	public $resultUser;
	public $resultTimePunch;

	public function controllerLocation($locationEndpoint){
		$this->locationEndpoint = $locationEndpoint;

		$locationJson 		= file_get_contents($this->locationEndpoint);
		$locationDecode 	= json_decode($locationJson,true);

		foreach ($locationDecode as $location) {
			$resultLocation[] = new LocationClass($location);
		}

		$modelLocation = new Model();
		$modelLocation->modelLocation($resultLocation);
	}

	public function controllerUser($userEndpoint){
		$this->userEndpoint = $userEndpoint;

		$userJson 		= file_get_contents($this->userEndpoint);
		$userDecode 	= json_decode($userJson,true);

		foreach ($userDecode as $userID) {
			foreach ($userID as $user) {
				$resultUser[] = new UserClass($user);
			}			
		}

		$modelUser = new Model();
		$modelUser->modelUser($resultUser);
	}

	public function controllerTimePunch($timePunchEndpoint){
		$this->timePunchEndpoint = $timePunchEndpoint;

		$timePunchJson 		= file_get_contents($this->timePunchEndpoint);
		$timePunchDecode 	= json_decode($timePunchJson,true);

		foreach ($timePunchDecode as $timePunch) {
			$resultTimePunch[] = new TimePunchClass($timePunch);
		}

		$modelTimePunch = new Model();
		$modelTimePunch->modelTimePunch($resultTimePunch);
	}
}
?>