<?php
namespace Toniel\CommonHelper;

class Rupiah
{

    public function format($value,$decimals = 2)
    {
        return toRupiah($value,$decimals);
    }
    public function toWords($value)
    {
        return spelled($value);
    }

    public function parseFromRupiah($value)
    {
        return parseFromRupiah($value);
    }

    
}
