<?php
include "../../controllers/acccontroller.php"; 
include "../../entity/acc.php";

    $acc1 = new acc($_POST['adresseE'],$_POST['mdpE']); 
    $acc1controller = new acccontroller(); 
    $acc1controller->verif($acc1);

?>