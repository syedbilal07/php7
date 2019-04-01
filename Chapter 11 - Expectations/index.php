<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
		ini_set('assert.exception', 1);

		class CustomError extends AssertionError {}

		assert(false, new CustomError("Custom Error Message"));
    ?>
    </body>
</html>