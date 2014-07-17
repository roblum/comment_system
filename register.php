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
  	<form id='register' onsubmit="form_submit()" method='post' accept-charset='UTF-8'>
	<input name="name" ng-model="name"/>
  <input name="comment" ng-model="comment"/>

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

       $sql2 = 'INSERT INTO comments '.
       '(comment) '.
       'VALUES ("' . $_POST["comment"] . '")';

mysqli_query($con,$sql);
mysqli_query($con,$sql2);
echo "success";

mysqli_close($con);
}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js"></script>
    <script src="main.js"></script>

  <script>
  function form_submit()
      {
      var inputName = document.querySelector("#register input[name=name]").value;
      var inputComment = document.querySelector("#register input[name=comment]").value;
        console.log(inputName)
      var xhr;
       if (window.XMLHttpRequest) { // Mozilla, Safari, ...
          xhr = new XMLHttpRequest();
      } else if (window.ActiveXObject) { // IE 8 and older
          xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
      var data = "name=" + inputName + '&comment=' + inputComment;
           xhr.open("POST", "register.php", true);
           xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
           xhr.send(data);
      }
  </script>

  </body>

</html>
