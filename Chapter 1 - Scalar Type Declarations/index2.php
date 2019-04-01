<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    // Strict mode
    declare(strict_types = 1);

    function sum(int ...$ints){
        return array_sum($ints);
    }

    print(sum(2, '3', 4));
    ?>
    </body>
</html>