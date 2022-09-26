<?php

namespace TomyKho\Here\Models;

final class GeocodeQuery
{
    public function __construct(public string $postalCode, public string $country)
    {
    }

    public function toArray()
    {
        return [
            'postalCode' => $this->postalCode,
            'country' => $this->country,
        ];
    }

    public function q()
    {
        return $this->country . ' ' . $this->postalCode;
    }

    public function qq()
    {
        $value = '';
        $array = $this->toArray();
        foreach ($array as $k => $v) {
            if (strlen($value) > 0) {
                $value .= ';';
            }
            $value .= "$k=$v";
        }
        return $value;
    }
}
