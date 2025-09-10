<?php

require_once 'Model/User.php';
$tstUser = new User;
$users = $tstUser->getUtilisateurs();
echo '<h3>Test getUtilisateurs : </h3>';
var_dump(value: $users->rowCount());
$user = $tstUser->getUtilisateur(1);
echo '<h3>Test getUtilisateur : </h3>';
var_dump(value: $user);
