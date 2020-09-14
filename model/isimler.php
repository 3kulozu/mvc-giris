<?php


class Isimler{
    public function IlkIsmiAl()
    {
        $db = file_get_contents("db/isimler.json");
        $parsed = json_decode($db);
        return $parsed[0];
    }

    public function TumIsimleriAl()
    {
        $db = file_get_contents("db/isimler.json");
        return json_decode($db);
    }

    public function EnYenisiniGoster()
    {
        $db = file_get_contents("db/isimler.json");
        $parsed = json_decode($db);
        return $parsed[array_key_last($parsed)];
    }
}