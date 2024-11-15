<?php
class config{
    private $user = 'iptroot';
    private $password = '12345';
    public $pdo = null;

    public function con(){
        try{
          $this->pdo = new PDO('mysql:host=192.168.1.13;dbname=db_petfeeder',$this->user,$this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->pdo;
    }

}

 
    



?>