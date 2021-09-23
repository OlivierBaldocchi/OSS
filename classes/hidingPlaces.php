<?php

class HidingPlaces{

    private string $code;
    private string $address;
    private string $country;
    private string $type;

    public function __construct(string $code, string $address, string $country,
                                string $type)
    {
        $this->code = $code;
        $this->address = $address;
        $this->country = $country;
        $this->type = $type;
    }
}