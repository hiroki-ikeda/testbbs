<?php

class bbsdata
{
  public $dbh;
  public $result;

  function __construct(){
    $this->dbh = new PDO('mysql:dbname=testbbs;host=mamono.cac9p1by90fe.ap-northeast-1.rds.amazonaws.com', 'webmaster', 'oPsq86Nh');

    if(!$this->dbh){
        die("error occurred with database connection");
    }
  }

  public function getData()
  {
    $this->result = $this->dbh->query('SELECT * FROM bbs');
    return $this->result;
  }

  public function add($data)
  {
    $stmt = $this->dbh->prepare('INSERT INTO bbs (logtext) VALUES (:logtext)');
    $stmt->bindParam(':logtext', $data, PDO::PARAM_STR);
    $stmt->execute();
  }
}

?>
