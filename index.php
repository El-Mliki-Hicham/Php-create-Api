<?php

include "ContactManager.php";


$ContactManager = new ContactManager();

$contacts =  $ContactManager->GetAllContacts();



header('content-type: application/json');
echo json_encode($contacts);

?>