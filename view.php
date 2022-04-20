<?php 

include('user.php');

$view  = NEW User();

$alldata  = $view->viewdata();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" bgcolor="red" align="center" width="800">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        
        
    </tr>
    <?php 

   while($result = mysqli_fetch_assoc($alldata)){
    $id          =  $result['ID'];
    $username    =  $result ['username'];
    $email       =  $result ['email'];
    $upassword   =  $result ['Password'];


?>


<tr align="center">
    <td><?php echo $username; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $upassword; ?></td>
    <td>
        <a href="result.php?id=<?php echo $id;?>"> VIEW</a> ||  
        <a href="edit.php?edit=<?php echo $id;?>">Edit</a>  ||
        <a href="delete.php?id=<?php echo $id;?>">Delete</a>
    </td>
    
   
    
</tr>


<?php 

   }

?>
</table>
    







</body>
</html>