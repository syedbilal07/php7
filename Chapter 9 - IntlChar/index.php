<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
		printf("%x", IntlChar::CODEPOINT_MAX);
		print(IntlChar::charName('@'));
		print(IntlChar::ispunct('!'));
    ?>
    </body>
</html>