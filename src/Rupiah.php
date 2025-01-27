<?php
namespace Toniel\CommonHelper;

class Rupiah
{

    public function format($value,$decimals = 2)
    {
        return "Rp " . number_format($value, $decimals, ',', '.');
        // $value = "Rp " . number_format($number, 0, ',', '.');
        // return $value;
    }
    public function spelled($value)
    {
        return spelled($value);
    }
}
