<?php

  function output ($name, $sex, $age, $coloring = false, $schoolAdd = false) {

    //age
    if ($age >= 12) {
      //sex
      if ($sex == '1') {
        $call = $name . '君';
        $color = 'blue';
      } else {
        $call = $name . 'さん';
        $color = 'pink';
      }
    } else {
      //sex
      if ($sex == '1') {
        $call = $name . 'くん';
        $color = 'blue';
      } else {
        $call = $name . 'ちゃん';
        $color = 'pink';
      }
    }

    //school
    if ($age >= 6 && $age <= 12 ) {
      $school = '(小)';
    } else if ($age >= 13 && $age <= 15) {
      $school = '(中)';
    } else if ($age >= 16 && $age <= 18) {
      $school = '(高)';
    } else if ($age >= 19 && $age <= 22) {
      $school = '(大)';
    }

    //coloring
    if ($schoolAdd) {
      $call .= $school;
    }

    //coloring
    if ($coloring) {
      $call = '<p style="color: '. $color .'">'. $call .'</p>';
    }
    return $call;
  }

  echo output('ゆうき', '1', 10). PHP_EOL;
  echo output('ゆうき', '2', 10). PHP_EOL;
  echo output('ゆうき', '1', 20). PHP_EOL;
  echo output('ゆうき', '2', 20). PHP_EOL;
  echo output('ゆうき', '1', 10, false, true). PHP_EOL;
  echo output('ゆうき', '2', 15, false, true). PHP_EOL;
  echo output('ゆうき', '1', 18, false, true). PHP_EOL;
  echo output('ゆうき', '2', 20, false, true). PHP_EOL;
