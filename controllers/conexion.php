<?php 
class Conexion{
    private $HOST;
    private $BDNAME;
    private $USER;
    private $PORT;
    private $PASSWORD;

    public function __construct(){
        $this->HOST = 'ec2-54-209-165-105.compute-1.amazonaws.com';
        $this->BDNAME = 'dam3jcvmr8jmsp';
        $this->USER = 'jqemciknjmalmf';
        $this->PORT = '5432';
        $this->PASSWORD = '85a5f95ed0899c10de92559d4fd2ec90942ee44640bd3a7e7ccee4718a9830e1';
    }
    function Conectar(){
        try{

            $dns = "pgsql:host=".$this->HOST.";port=".$this->PORT.";dbname=".$this->BDNAME;
            $conexion = new PDO($dns,$this->USER,$this->PASSWORD);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;

        }catch(PDOException $error){
            die("Error en conexion: ".$error->getMessage()."<br>");
        }
    }
}

?>