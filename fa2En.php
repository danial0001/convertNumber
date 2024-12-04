<?php
function faToEn($value) : string
{
  $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];

  $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];

  $en = range(0, 9);

  $changeToFa = str_replace($persian, $en, $value);

  return str_replace($arabic,$en,$changeToFa);

}

echo faToEn('۷٦٥'); //765;
