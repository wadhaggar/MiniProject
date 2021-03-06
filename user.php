<?php
// cette variable affiche message d'erreur 
require 'database/connect.php';
/*
$errorMessage = [];
if($_POST):

    if(isset($_POST['name'],$_POST['email'], $_POST['password'])
        && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
            $na = $_POST['name'];
            $em = $_POST['email'];
            $pw = $_POST['password'];
            $user = 'root';
            $pass = '';
            $db = 'test';
            //stockage
            $db = mysqli_connect ('localhost', $user, $pass, $db)  or die('Si n arrive pas conecter sur bdd');
            $db = 'INSERT INTO user (`userNmae`, `userEmail`, `userPassword`)
                          VALUES ($na, $em, $pw)';
            
            
            $errorMessage[] = 'Well done';
    }else{
        $errorMessage[] = 'Fill in all the feilds';
    }

endif;
*/
require 'view/index.php';