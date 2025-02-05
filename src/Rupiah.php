<?php
namespace Toniel\CommonHelper;

class Rupiah
{
    public readonly ?float $value;
    public readonly string $formatted;

    public function __construct(float $value) {
        $this->value = $value;

        $this->formatted = toRupiah($value);
    }

    public static function from($value)
    {
        return new self($value);
    }

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
