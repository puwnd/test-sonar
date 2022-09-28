<?php

$alma = '';

function func()
{
    global $alma;

    echo $_GET['name'];

    die($alma);
}
