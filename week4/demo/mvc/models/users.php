<?php


function read_users() {
    global $db;
    $results = array();
    $dbs = $db->prepare('select * from users');
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;  
        
}
