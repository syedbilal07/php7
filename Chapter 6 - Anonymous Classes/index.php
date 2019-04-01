<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
		interface Logger{
		    public function log(string $msg);
        }

        class Application{
		    private $logger;

		    public function getLogger(): Logger{
		        return $this->logger;
            }
            public function setLogger(Logger $logger){
                $this->logger = $logger;
            }
        }

        $app = new Application;
        $app->setLogger(new class implements Logger {
            public function log(string $msg) {
                print($msg);
            }
        });

		$app->getLogger()->log("My First Log Message");
    ?>
    </body>
</html>