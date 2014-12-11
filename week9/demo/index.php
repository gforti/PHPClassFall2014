<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './Sample.php';
        include './Config.php';
        include './Util.php';
        include './DB.php';
        
        $sample =  new Sample();
        $sample2 =  new Sample();
        
        
        if ( $sample2->setDb('database2') ) {
            echo 'it worked';
        } else {
            echo 'error';
        }
        
        
        if ( $sample->setDb('database') ) {
            echo 'it worked';
        } else {
            echo 'error';
        }
      
        
        echo '<br />',$sample->getDb(), '<br />';
        echo $sample2->getDb(), '<br />';
        
        
        echo Config::DB_DNS;
        
                $util = new Util();
        
        $util->isPostRequest();
                
        
        $pdo = new DB();
        
        var_dump( $pdo->getPDO() );
        
        
        
        
        ?>
    </body>
</html>
