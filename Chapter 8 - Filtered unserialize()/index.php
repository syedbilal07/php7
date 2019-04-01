<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
    class MyClass1{
        public $obj1prop;
    }

    class MyClass2{
        public $obj2prop;
    }

    $obj1 = new MyClass1();
    $obj1->obj1prop = 1;
    $obj2 = new MyClass2();
    $obj2->obj2prop = 2;

    $serializedObj1 = serialize($obj1);
    $serializedObj2 = serialize($obj2);

    // default behaviour that accepts all classes
    // second argument can be ommited.
    // if allowed_classes is passed as false, unserialize converts all objects
    // into __PHP_Incomplete_Class object
    $data1 = unserialize($serializedObj1, ["allowed classes" => true]);

    // converts all objects into __PHP_Incomplete_Class object except those of
    // MyClass1 and MyClass2
    $data2 = unserialize($serializedObj2, ["allowed classes" => ["MyClass1", "MyClass2"]]);

    print($data1->obj1prop);
    print("<br>");
    print($data2->obj2prop);
    ?>
    </body>
</html>