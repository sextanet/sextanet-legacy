<?php

function dd(... $args)
{
    die(var_export($args));
}

require_once __DIR__.'/moviles.php';
