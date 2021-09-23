<?php

class Agents {
    
    protected string $surname;
    protected string $name;
    protected string $birth_date;
    protected string $code_name;
    protected string $nationality;
    
    public function __construct(string $surname, string $name, string $birth_date,
                                string $code_name, string $nationality) {
        $this->surname = $surname;
        $this->name = $name;
        $this->birth_date = $birth_date;
        $this->code_name = $code_name;
        $this->nationality = $nationality;
    }

    public function get_infos() {
        echo $this->name .'<br>';
        echo $this->code_name;
    }
}       