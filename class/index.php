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
        include_once 'Member.php';
        $obj1 = new Member("1","John","brown","098-456-896");
        $obj1->getName();
        $obj2 = new Member("2","mary","sue","091563569");
        $obj2->getName();
        ?>
    </body>
</html>
