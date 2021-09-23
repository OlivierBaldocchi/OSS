<?php

class Missions{
    private string $title;
    private string $description;
    private string $code_name;
    private string $country;
    private string $agent;

    public function __construct(string $title, string $description, string $code_name,
                                string $country, string $agent)
    {
        $this->title = $title;
        $this->description = $description;
        $this->code_name = $code_name;
        $this->country = $country;
        $this->agent = $agent;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}