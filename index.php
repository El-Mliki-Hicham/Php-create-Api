<?php

include "ContactManager.php";


$ContactManager = new ContactManager();

$contacts =  $ContactManager->GetAllContacts();



header('content-type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($contacts);

?>