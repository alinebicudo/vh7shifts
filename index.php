<?
require('config.php');

require('Classes/Location.php');
require('Classes/User.php');
require('Classes/TimePunch.php');

require('Controllers/controller.php');

require('Models/model.php');

require('Views/view.php');

$view = new View();

$returnLocation = $view->returnLocation($locationID);
for ($i=0; $i < count($returnLocation); $i++) { 
	echo 'Location ID: '.$returnLocation[$i]->id."\n";
}

$returnUser = $view->returnUser($userID);
for ($i=0; $i < count($returnUser); $i++) { 
	echo 'User ID: '.$returnUser[$i]->id."\n";
}

$returnTotalWorkedHours = $view->returnTotalWorkedHours($userID,$locationID);
if ($returnTotalWorkedHours) {
	echo 'Total Worked Hours: '.$returnTotalWorkedHours;
}

$view->returnView();
?>