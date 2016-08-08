<?php

// Dump and Die
function dd($var = null)
{
    echo '<pre>';
    die(var_dump($var));
    echo '</pre>';
}
