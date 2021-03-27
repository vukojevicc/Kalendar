<?php

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/Database.php';

class Susret {

    public $id;
    public $opis_susreta;
    public $datum_susreta;

    public static function unesiSusret($opis_susreta, $datum_susreta) {
        $db = Database::getInstance();
        $db->insert('Susret', "INSERT INTO `susreti` (`opis_susreta`, `datum_susreta`) VALUES (:opis_susreta, :datum_susreta);", [
            ':opis_susreta' => $opis_susreta,
            ':datum_susreta' => $datum_susreta
        ]);
    }
    public static function izlistajSusrete(){
        $db = Database::getInstance();
        $susreti = $db->select('Susret', 'SELECT * FROM `susreti`');
        return $susreti;
    }
}
