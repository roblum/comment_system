<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Responsive Slider</title>
  </head>

  <body ng-app="myApp">
    <div class="container" ng-controller="messagesController">
  	<form id='register' action='register.php' method='post' accept-charset='UTF-8'>
	<input name="name" ng-model="name"/>

		<button type="submit">register</button>
	</form>
    </div>

<?php
if($_POST){
$con=mysqli_connect('localhost', 'root', 'root','comment_system');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$sql = 'INSERT INTO users '.
       '(name) '.
       'VALUES ("' . $_POST["name"] . '")';
mysqli_query($con,$sql);
echo "success";

mysqli_close($con);
}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js"></script>
    <script src="main.js"></script>

  </body>

</html>
