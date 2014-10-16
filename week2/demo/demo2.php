<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> My Form </h1>
        <form action="#" method="get">            
            Name: <input type="text" name="fname" />
            <input type="submit" />            
        </form>
        
        <?php
            // use var_dump to get information about any variable
            var_dump($_GET);
            
            /*
             * use the super global $_GET to get key=value pairs that come from the url
             * 
             * index.php?fname=joe
             * 
             * echo $_GET['fname']; (outputs joe)
             */
            echo $_GET['fname'];
            
            // better way to access super global $_GET
            echo filter_input(INPUT_GET, 'fname');
            
            
            /*
             * You can access the values to check if they equal something.
             * Depending on the value you might get a different echo output
             * or none at all.
             */
            if ( $_GET['fname'] === 'one' ) {
                echo '<p> this is one</p>';
            } else if( $_GET['fname'] === 'two' ){
               echo '<p> this is two</p>'; 
            }
            
            
        ?>
    </body>
</html>
