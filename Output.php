<?php

class Output {

  const SEX_MALE = 1;
  const SEX_FEMALE = 2;
  const BORDER_AGE = 12;

  public $name;
  public $sex;
  public $age;

  public function __construct ($name, $sex, $age) {
    $this->name = $name;
    $this->sex = $sex;
    $this->age = $age;
  }

  public function call () {

    if ($this->age >= Output::BORDER_AGE ) {
      if ($this->sex == Output::SEX_MALE) {
        $call = '君';
      } else if ($this->sex == Output::SEX_FEMALE) {
        $call = 'さん';
      }
    } else {
      if ($this->sex == Output::SEX_MALE) {
        $call = 'くん';
      } else if ($this->sex == Output::SEX_FEMALE) {
        $call = 'ちゃん';
      }
    }
    return $this->name . $call;
  }
}
