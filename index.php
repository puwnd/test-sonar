<?php

$alma = '';

func();

function func()
{
    global $alma;

    echo $_GET['name'];

    // example of an empty password when connecting to a mysql database
    $conn = new mysqli('', '', '');

    die($alma);
}

class ClassName
{
    public function FunctionName()
    {
        // FIXME: pls work pls :')
        throw new ClassName('');
    }
}
