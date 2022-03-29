<?php

  // Fonksyon
  function tarihtenYuzde($startTime, $endTime){

    $startDays = (strtotime($startTime)  / (60 * 60 * 24));
    $nowDays = (time()  / (60 * 60 * 24));
    $endDays = (strtotime($endTime)  / (60 * 60 * 24)));
    return ceil(ceil($nowDays - $startDays) / (ceil($endDays - $startDays) / 100));

  }

  // Kullanımı
  tarihtenYuzde(,)
