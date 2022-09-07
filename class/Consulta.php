<?php
include_once "../db/db.php";
include_once "../configuracao.php";
class Consulta{
    public static function GetConsulta(){
    
            $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);

    
            return $db->Query("SELECT * FROM consulta WHERE disponivel = 1");
    
        }
    public static function Marcar($id){

            $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
    
            $sql = "UPDATE consulta SET disponivel = 0 WHERE id = $id ";
    
            return $db->SqlDml($sql);
    }

    public static function GetConsultaMarcadas(){
    
        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);


        return $db->Query("SELECT * FROM consulta WHERE disponivel = 0");

    }
public static function CancelarConsulta($id){

        $db = new DataBase(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);

        $sql = "UPDATE consulta SET disponivel = 1 WHERE id = $id ";

        return $db->SqlDml($sql);
}

    
    }


?>