<?php
class Mahasiswa_model{
    private $dbh ; //database handler (menampung koneksi ke database)
    private $stmt ; //menampung query

    public function __contruct(){
        //database source name
        //identitas server , koneksi ke PDO
        $dsn ='mysql:host=localhost;dbname=phpmvc';
        $user = 'root';
        $pass = '';

        
        try{
            $this->dbh = new PDO($dsn, $user, $pass);
        } catch(PDOException $e){
            die($e->getMessage());
        }
        
    }   

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $execute = $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);   
    }
  
}