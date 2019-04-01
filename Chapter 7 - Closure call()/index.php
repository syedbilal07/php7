<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    class A{
        private $x = 1;
    }

    // PHP 7+ code, Define
    $value = function(){
        return $this->x;
    };

    print($value->call(new A));
    ?>
    </body>
</html>