<?php

include("model/isimler.php");

$isimler = new Isimler();

function ilkVeSon()
{
    global $isimler;
    $ilkisim = $isimler->IlkIsmiAl();
    $sonisim = $isimler->EnYenisiniGoster();
    return  view('isimler',$ilkisim . "-" . $sonisim);
    
}


function ilkVeSon2(){
    global $isimler;
    $tumİsimler = $isimler -> TumIsimleriAl();
    $ilkİsim = $tumİsimler[0];
    $sonİsim = $tumİsimler[5];
    return view('isimler', $sonİsim . "-" . $ilkİsim);
}

function view($viewIsmi, $isim)
{
    return `php view/$viewIsmi.blade.php $isim`;
}


echo call_user_func($argv[1]);