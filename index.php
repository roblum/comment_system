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
      
	<input ng-model="name"/>
	<input ng-model="comment"/>
		<div>{{name}}</div>

		<div ng-repeat="message in postedMessages">
			<div>{{message}}</div>
		</div>
		
	
    </div>

	<?php
		$link = mysql_connect(
		  	':/Applications/MAMP/tmp/mysql/mysql.sock',
		  	'root',
		  	'root'
		);

if(! $link )
{
  die('Could not connect: ' . mysql_error());
}

$sql = 'INSERT INTO comments '.
       '(id,name, date, comment) '.
       'VALUES ( "' . echo . ", "XYZ", 2000, NOW() )';

mysql_select_db('test_db');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);




	?>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js"></script>
    <script src="main.js"></script>

  </body>

</html>
