<?php
function conectar()
{

        $host1 = "database-2.cjtbc7moynbv.us-east-1.rds.amazonaws.com";
        $dbname1 = "consesionario";
        $username1= "postgres";
        $password1 = "postgres";


        $host = "localhost";
        $dbname = "parcial2";
        $username= "tj";
        $password = "Bootgear1";

        try{
            $conn = pg_connect("host=$host1 dbname=$dbname1 user=$username1 password=$password1");
        } catch (Exception $exp) {
            echo("Ta perdido socio $exp");
        }
        return $conn;
}

?>
