<?php

function printCustom($name)
{
    $data = array("Volvo", "BMW", "Toyota");
    print_r(
        $name ." ". basename(__FILE__) ." ". __LINE__." \n data :: "
    );

    print_r($data);
}


printCustom('Grimma');