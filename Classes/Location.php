<?
class LocationClass{

	public $id;
	public $address;
	public $city;
	public $state;
	public $country;
	public $lat;
	public $lng;
	public $timezone;
	public $created;
	public $modified;

	public $dailyOvertimeMultiplier;
	public $dailyOvertimeThreshold;

	public $weeklyOvertimeMultiplier;
	public $weeklyOvertimeThreshold;

	public function __construct($locationArray){
		$this->id 		= $locationArray['id'];
		$this->address 	= $locationArray['address'];
		$this->city 	= $locationArray['city'];
		$this->state 	= $locationArray['state'];
		$this->country 	= $locationArray['country'];
		$this->lat 		= $locationArray['lat'];
		$this->lng 		= $locationArray['lng'];
		$this->timezone = $locationArray['timezone'];
		$this->created 	= $locationArray['created'];
		$this->modified = $locationArray['modified'];

		$this->dailyOvertimeMultiplier 	= $locationArray['labourSettings']['dailyOvertimeMultiplier'];
		$this->dailyOvertimeThreshold 	= $locationArray['labourSettings']['dailyOvertimeThreshold'];

		$this->weeklyOvertimeMultiplier = $locationArray['labourSettings']['weeklyOvertimeMultiplier'];
		$this->weeklyOvertimeThreshold 	= $locationArray['labourSettings']['weeklyOvertimeThreshold'];
	}
}
?>