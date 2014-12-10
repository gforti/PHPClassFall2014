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
        
        $sample =  new Sample();
        
        if ( $sample->setDb('database') ) {
            echo 'it worked';
        } else {
            echo 'error';
        }
      
        
        echo $sample->getDb();
        
        
        echo Config::DB_DNS
        
                $util = new Util();
        
        $util->isPostRequest();
                Util::
        
        ?>
    </body>
</html>
