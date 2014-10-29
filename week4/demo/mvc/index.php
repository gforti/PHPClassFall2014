<?php

include 'models/database.php';
include 'models/users.php';

include 'views/header.php';

$action = 'home';

if ( !empty($_POST) && isset($_POST['action']) ) {
    $action = $_POST['action'];
    //filter_input(INPUT_POST, 'action')
} else if ( !empty($_GET) && isset($_GET['action']) ) {
    $action = $_GET['action'];
    //filter_input(INPUT_GET, 'action')
}

if ( $action === 'view_users' ) {
    
    $users = read_users();
    include 'views/view_users.php';
     
} else if ( $action === 'add_users' ) {
     echo 'add_products';
    
} else {
    // home
    echo 'home';
}


include 'views/footer.php';