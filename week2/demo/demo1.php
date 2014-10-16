<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        /*
          variable names must start with a $ (dollar) sign.  Use letters and underscores 
         * for your variable names.
         * 
         * You can use the period to Concatenate(join) two string values
         * 
         *  $hi = 'hello' . 'world'; 
         */
        $hello = 'hello';
        $hello .= 50;
        
        /*
         * It's recommend to use commas instead of periods to concatenate when
         * displaying text with echo, you can use periods.
         * 
         * echo $hi . ' this is cool';
         */
        
        echo $hello , ' world', '<br />', '<p>Helloo again</p>';
        
        
        /*
          Double qoutes to display the value of the variable
         * vs with single qoutes will display it as plain text.
         * 
         */
        echo "$hello world", "<br />";
        echo '$hello world';
        
        /*
         * At the end of the day PHP is just sending back HTML in the HTTP header
         * request.
         */
        
        ?>
    </body>
</html>
