<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        print_r($_POST);
        
         $pep = filter_input(INPUT_POST, 'pep');
         $mush = filter_input(INPUT_POST, 'mush');
         $olv = filter_input(INPUT_POST, 'olv');
        
        echo isset($_POST['olv']);
         
         
        ?>
        
          <form action="#" method="post">
            
1. pep <input type="checkbox" name="pep"
    <?php
         if ( $pep == 'on' )    {
             echo 'checked="checked"';
         } 
              
      ?>        /> <br />
2. mush <input type="checkbox" name="mush" 
               <?php
         if ( $mush == 'on' )    {
             echo 'checked="checked"';
         } 
              
      ?>
               
               /> <br />
3. olv <input type="checkbox" name="olv" 
              
               <?php
         if ( $olv == 'on' )    {
             echo 'checked="checked"';
         } 
              
      ?>
              
              /> <br />

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
