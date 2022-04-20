<?php 

include('user.php');

$updata  = NEW User();

$editid     = $_REQUEST['id'];

$alleditdata  = $updata->editdata($editid);


// database table name hobe
$dataread     = mysqli_fetch_assoc($alleditdata);
    $idname   = $dataread['ID'];
    $username = $dataread['username'];
    $email    = $dataread['email'];
    $pass     = $dataread['Password'];



// update here
if(isset($_POST['submit'])){
    $updata->update($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opp crud</title>
</head>
<body>
    <form action="" method="POST">

    <input type="hidden" name="ID" value="<?php if(isset($idname)){echo $idname;} ?>">

    <input type="text" name="username" placeholder="username" value="<?php if(isset($username)){echo $username;} ?>"> <br> <br>

    <input type="email" name="email" placeholder="email" value="<?php if(isset($email)){echo $email;} ?>">  <br> <br>
    <input type="password" name="password" placeholder="password" value="<?php if(isset($pass)){echo $pass;} ?>"> <br> <br>

    <input type="submit" name="submit" value="Update">


    </form>


    <h1>NAME : <?php echo $username;?></h1>
    <button style="display:block; margin: 10px auto;"><a href="student.php">VIEW PAGE</a></button>
</body>
</html>