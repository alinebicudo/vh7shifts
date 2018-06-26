<?
class View{

	public function returnView(){
		require(MAIN_VIEW);
	}

	public function viewLocation($locationEndpoint) {
		$this->locationEndpoint = $locationEndpoint;
		
		if (isset($this->locationEndpoint)) {
			$controllerLocation = new Controller();
			$controllerLocation->controllerLocation($this->locationEndpoint);
		}
	}

	public function viewUser($userEndpoint) {
		$this->userEndpoint = $userEndpoint;
		
		if (isset($this->userEndpoint)) {
			$controllerUser = new Controller();
			$controllerUser->controllerUser($this->userEndpoint);
		}
	}

	public function viewTimePunch($timePunchEndpoint) {
		$this->timePunchEndpoint = $timePunchEndpoint;
		
		if (isset($this->timePunchEndpoint)) {
			$controllerTimePunch = new Controller();
			$controllerTimePunch->controllerTimePunch($this->timePunchEndpoint);
		}
	}
}
?>