<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
         
          $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            
           $statement = $pdo->query('select * from users');
           $users = $statement->fetchAll(PDO::FETCH_ASSOC);
            var_dump($users);
            foreach($users as $user) {
                foreach($user as $key => $value) {
                    echo '<p>', $key , ' = ', $value, '</p>';
                }
            }
           
              
            
        ?>  
               
    </body>
</html>
