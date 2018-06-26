<?
class UserClass{

	public $id;
	public $locationId;
	public $firstName;
	public $lastName;
	public $email;
	public $photo;
	public $userType;
	public $hourlyWage;
	public $active;
	public $created;
	public $modified;

	public function __construct($userArray){
		$this->id 			= $userArray['id'];
		$this->locationId 	= $userArray['locationId'];
		$this->firstName	= $userArray['firstName'];
		$this->lastName		= $userArray['lastName'];
		$this->email 		= $userArray['email'];
		$this->photo		= $userArray['photo'];
		$this->userType		= $userArray['userType'];
		$this->hourlyWage	= $userArray['hourlyWage'];
		$this->active 		= $userArray['active'];
		$this->created 		= $userArray['created'];
		$this->modified 	= $userArray['modified'];
	}
}
?>