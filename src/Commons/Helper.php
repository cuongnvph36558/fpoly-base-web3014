<?php

namespace Cuong\Bai8\Commons;

class Helper
{
    public static function debug($data)
    {
        echo '<pre>';

        print_r($data);

        die;
    }
}
