<?
class TimePunchClass{

	public $id;
	public $userId;
	public $locationId;
	public $clockedIn;
	public $clockedOut;
	public $hourlyWage;
	public $created;
	public $modified;

	public function __construct($timePunchArray){
		$this->id 			= $timePunchArray['id'];
		$this->userId 		= $timePunchArray['userId'];
		$this->locationId 	= $timePunchArray['locationId'];
		$this->clockedIn 	= $timePunchArray['clockedIn'];
		$this->clockedOut 	= $timePunchArray['clockedOut'];
		$this->hourlyWage 	= $timePunchArray['hourlyWage'];
		$this->created 		= $timePunchArray['created'];
		$this->modified 	= $timePunchArray['modified'];
	}
}
?>