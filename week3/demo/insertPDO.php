<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
         
             $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            
         
            if ( !empty($_POST) ) {
                
                $sql = "insert into users set fullname='"
                        . $_POST['fullname'] . 
                        "', email = 'test@test.com', phone = '4014443333', zip = '12345';";
                
                
                echo $sql ;
                
                if ( $pdo->exec($sql) ) {
                    echo 'Saved Data';                    
                } else {
                    echo 'Saved NOT Data';
                }
                    
                
                echo $_POST['fullname'];
            }
                        
            
        ?>  
        
        <form action="#" method="post">            
            <input type="text" name="fullname" value="" />            
            <input type="submit" value="submit" />            
        </form>
        
        
       
    </body>
</html>
