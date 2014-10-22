<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
         
            $arr = array();
            $arr['hello'] = 'hi';
            $arr['hi'] = 'how are you';
            $arr[0] = 'zero';
            $arr[0] = 'zerozero';
            
            var_dump($arr);
            
            foreach($arr as $key => $value) {
                echo '<p>', $key , ' = ', $value, '</p>';
            }
            
            foreach($arr as $value) {
                echo '<p>', $value, '</p>';
            }
            
            
        ?>  
        
       
    </body>
</html>
