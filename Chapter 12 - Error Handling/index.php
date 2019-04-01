<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
		class MathOperations{
		    protected $n = 10;

            // Try to get the Division by Zero error object and display as Exception
            public function doOperation(): string{
                try{
                    $value = $this->n % 0;
                    return $value;
                }
                catch(DivisionByZeroError $e){
                    return $e->getMessage();
                }
            }
        }

        $mathOperationObj = new MathOperations();
		print($mathOperationObj->doOperation());
    ?>
    </body>
</html>