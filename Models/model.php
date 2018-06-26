<?
class Model{

	public function modelLocation($locationResult){
		$this->locationResult = $locationResult;
		return $this->locationResult;
	}

	public function modelUser($userResult){
		$this->userResult = $userResult;
		return $this->userResult;
	}

	public function modelTimePunch($timePunchResult){
		$this->timePunchResult = $timePunchResult;
		return $this->timePunchResult;
	}
}
?>