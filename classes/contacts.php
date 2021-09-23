<?php

class Contacts extends Protagonists{

    public function __construct(string $surname, string $name, string $birth_date,
                                string $code_name, string $nationality)
    {
        $this->username = $username;
        $this->name = $name;
        $this->birth_date = $birth_date;
        $this->code_name = $code_name;
        $this->nationality = $nationality;
    }
}