<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        print_r($_POST);
        
        $carSelected = filter_input(INPUT_POST, 'cars');
        
        $checkedText = 'checked="checked"';       
        ?>
        
          <form action="#" method="post">
            
1. ford <input type="radio" name="cars" value="ford"
               <?php
                if ( $carSelected === 'ford') {
                    echo $checkedText;
                }               
               ?>
               /> <br />
2. chevy <input type="radio" name="cars" value="chevy" 
                <?php
                if ( $carSelected === 'chevy') {
                    echo $checkedText;
                }               
               ?>
                
                /> <br />
3. honda <input type="radio" name="cars" value="honda"
                 <?php
                if ( $carSelected === 'honda') {
                    echo $checkedText;
                }               
               ?>
                /> <br />

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
