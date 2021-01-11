<?php
    // Namespaces are used to resolve naming conflict  in methods, class names etc.
    // A namespace must be declared at the top.
    // It can be declared in various ways:
    // 1st ------ namespace first();
    //                 rest of the code


    // 2nd --- namespace first{// required code  }
    require 'first.php';
    require 'second.php';

    function demo(){
        echo "This is demo function from index<br>";
    }

    $obj1 = new first\One();
    $obj2 = new second\One();
    demo();
    first\demo();
    second\demo();
?>