<?php
require_once("config/db_config.php");


class Model_db {
    private $db; //храниться объект соединения с базой данных

    public function __construct($db) { //конструктор класса, который принимает 
        $this->db = $db;               // и сохраняет $db в приватном свойстве
        
    }

    // извлекает данные и возвращает их в виде массива
    public function GetData() {
        $arrayResult = array();

        $query = "SELECT * FROM books"; 
        // запрос к БД с $db
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {  //извлекаются данные и сохраняются в массив
            while ($row = $result->fetch_assoc()) { //ассоциативный массив- однa запись из базы данных
                $arrayResult[] = array(             //, где ключи соответствуют полям в таблице
                    "TITLE" => $row["TITLE"],
                    "DATE" => $row["DATE"],
                    "AUTHOR" => $row["AUTHOR"],
                    "IMAGE" => $row["IMAGE"],
                    "TEXT" => $row["TEXT"]
                );
            }
        }
        
        return $arrayResult;
    }
}