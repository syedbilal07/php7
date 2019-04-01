<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    // Coercive mode
    function sum(int ...$ints){
        return array_sum($ints);
    }
    print(sum(2, '3', 4));
    ?>
    </body>
</html>