<?php

require 'assets/db/connexion/connectdb.php';
$id=0; 
if(!empty($_GET['id'])){ 
    $id=$_REQUEST['id']; 
} 
if(!empty($_POST)){ 
    $id= $_POST['id']; 

    $query = "DELETE FROM pagefilm WHERE pagefilm . id_pagefilm = ?";
    $retour = $dbh -> prepare($query);
    $retour->execute(array($id));

    header("Location: admin.php");
}

?>