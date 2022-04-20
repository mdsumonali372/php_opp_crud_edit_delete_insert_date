<?php 

include('user.php');


$ID     = $_REQUEST['id'];

$delete  = NEW User();

$deletedata  = $delete->deletedata($ID);




?>