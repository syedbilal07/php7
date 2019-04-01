<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    // fetch the value of $_GET['user'] and returns 'not passed'
    // if username is not passed
    $username = $_GET['username'] ?? 'not passed';
    print($username);
    print ("<br />");

    // Equivalent code using ternary operator
    $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
    print($username);
    print("<br/>");
    // Chaining ?? operation
    $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
    print($username);
    ?>
    </body>
</html>