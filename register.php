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

    	<form id='comment-form' onsubmit="form_submit()" method='post' accept-charset='UTF-8'>
    	  <input name="name" ng-model="name"/>
        <textarea name="comment" ng-model="comment"></textarea>

  	    <button type="submit">Submit</button>
  	  </form>

      <form id='get-user' onsubmit="get_user()" method='get' accept-charset='UTF-8'>
        <button type="submit">Submit</button>
      </form>

    </div>

<?php
if($_POST){
$con = new mysqli('localhost', 'root', 'root','comment_system');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$sqlName = 'INSERT INTO users '.
        '(name) '.
        'VALUES ("' . $_POST["name"] . '");';

        $sqlComment = 'INSERT INTO comments (date, comment) VALUES (NOW(),"' . $_POST["comment"] . '");';

        $query = $sqlName . $sqlComment;
        error_log($query);
    
    $con->multi_query($query);
    //mysqli_query($con, $query);
    // mysqli_query($con,$sqlComment);
      echo "success";

    mysqli_close($con);
}

if($_GET){
  error_log('get requested');
}
?>

  <script>
  function form_submit(){
      var inputName = document.querySelector("#comment-form input[name=name]").value
          ,inputComment = document.querySelector("#comment-form textarea[name=comment]").value
          ,xhr;

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

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js"></script>
    <script src="main.js"></script>
  </body>

</html>
