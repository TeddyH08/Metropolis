<?php 

require 'assets/db/connexion/connectdb.php';

$sqlRequest = ("SELECT * FROM pagefilm");
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute();

$result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

$sqlfav = ("SELECT * FROM avoir");
$pdoStatfav = $dbh->prepare($sqlfav);
$pdoStatfav->execute();

$resultfav = $pdoStatfav->fetchAll(PDO::FETCH_ASSOC);


?>