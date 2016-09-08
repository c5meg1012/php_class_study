<?php

class HtmlOutput extends Output {

  public function call () {

    if ($sex == HtmlOutput::SEX_MALE) {
      $color = 'blue';
    } elseif ($sex == HtmlOutput::SEX_FEMALE) {
      $color = 'pink';
    }
    return '<p style="color: '. $color .'">'. parent::call() .'</p>';
  }

}
