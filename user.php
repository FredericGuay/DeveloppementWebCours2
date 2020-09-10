<?php
    require("userModel.php");
    require("userController.php");

    $userModel = new UserModel();
    $controller = new UserController($userModel);
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(isset($_GET['id'])){
            
            $controller->show_user($_GET['id']);
        }elseif(isset($_GET['name'])){
            $controller->show_user_name($_GET['name']);
        }else{
            $controller->show_users();
        }
        
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "POST";
    }
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        echo "PUT";
    }
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        echo "DELETE";
    }
      
?>