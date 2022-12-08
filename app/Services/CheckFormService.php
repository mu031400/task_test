<?php

namespace App\Services;

class CheckFormService
{
  public static function checkGender($date){

    if($date->gender === 0 ){
      $gender = '男性';
  } else {
      $gender = '女性';
  }

    return $gender;
  }


  public static function checkAge($date){
    if($date->age === 1){ $age = '~19歳'; }
    elseif($date->age === 2){ $age = '20~29歳'; }
    elseif($date->age === 3){ $age = '30~39歳'; }
    elseif($date->age === 4){ $age = '40~49歳'; }
    elseif($date->age === 5){ $age = '50~59歳'; }
    elseif($date->age === 6){ $age = '60歳'; }
    else{ $age = '年齢不明'; }

    return $age;
  }
}

