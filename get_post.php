<?php
// if statement
//  if(isset($_GET['name'])){
//     // print_r($_GET);
//     // $name = htmlentities($_GET['email']);
//     // echo $name;
//  }
//  if(isset($_POST['name'])){
//     // print_r($_POST);
//     $name = htmlentities($_POST['email']);
//     echo $name;
//  }

//  if(isset($_REQUEST['name'])){
//     // print_r($_REQUEST);
//     $name = htmlentities($_REQUEST['email']);
//     echo $name;
//  }
echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form action="get_post.php" method="GET">
        <div>
            <label>Name</label><br>
            <input type="text" name ="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name ="email">
        </div>
        <input type="submit" value = "Submit">
    </form>
</body>
</html>
