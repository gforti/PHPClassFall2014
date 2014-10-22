<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
            if ( !empty($_POST) ) {
                echo $_POST['fullname'];
            }
        ?>
        
        <form action="#" method="post">            
            <input type="text" name="fullname" value="" />            
            <input type="submit" value="submit" />            
        </form>
        
        
       
    </body>
</html>
