<?php


function url($path)
{
    return $_ENV['DOMAIN'] . '/' . trim($path, '/');
}