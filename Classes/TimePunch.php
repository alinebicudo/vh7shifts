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

	public $clockedStart;
	public $clockedEnd;
	public $diffHours;

	public function __construct($timePunchArray){
		$this->id 			= $timePunchArray['id'];
		$this->userId 		= $timePunchArray['userId'];
		$this->locationId 	= $timePunchArray['locationId'];
		$this->clockedIn 	= $timePunchArray['clockedIn'];
		$this->clockedOut 	= $timePunchArray['clockedOut'];
		$this->hourlyWage 	= $timePunchArray['hourlyWage'];
		$this->created 		= $timePunchArray['created'];
		$this->modified 	= $timePunchArray['modified'];

		$this->clockedStart = strtotime($this->clockedIn);
		$this->clockedEnd 	= strtotime($this->clockedOut);

		$this->diffHours 	= $this->clockedEnd - $this->clockedStart;
	}
}
?>