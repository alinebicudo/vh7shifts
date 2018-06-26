<?
require('config.php');

require('Classes/Location.php');
require('Classes/User.php');
require('Classes/TimePunch.php');

require('Controllers/controller.php');

require('Models/model.php');

require('Views/view.php');

$view = new View();

$view->viewLocation(LOCATION_ENDPOINT);
$view->viewUser(USERS_ENDPOINT);
$view->viewTimePunch(TIME_PUNCHES_ENDPOINT);

$view->returnView();
?>