<!DOCTYPE html>
<!--
PETCHADA BUNTIRAK [11/26/2018]
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <?php
            
            $numberPeople="";
            $numberRoom="";
            $in_date=date("Y-m-d");
            $out_date= date("Y-m-d");
                    ?>
    </body>
    <h1>Room reservation</h1>
     <form action="booking.php" method="get">  
         Number of people : <input type="text" name="numberPeople" value="<?php echo $numberPeople?>">
         <br>
         Number of room : <input type="text" name="numberRoom" value="<?php echo $numberRoom?>">
         <br>
         Check in: <input type="date" name="in_date" value="<?php echo $in_date?>">
         <br>
         Check out: <input type="date" name="out_date" value="<?php echo $out_date?>">
         <input type="submit" href="/booking.php">>
</form>
    
  
</form>
</html>
    