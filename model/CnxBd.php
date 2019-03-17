<?php

class CnxBd extends PDO
{
  private $conn;

  public function __construct()
  {
    $this->conn = new PDO("mysql:host=localhost;dbname=crud","root","26061996");
  }

  private function setParametros($statement, $parametros = array())
  {
    foreach ($parametros as $chave => $parametro)
    {
        $this->setParametro($statement, $chave, $parametro);
    }
  }

  private function setParametro($statement, $chave, $parametro)
  {
    $statement->bindparam($chave, $parametro);
  }

  public function query($comando, $parametros = array())
  {
    $stmt = $this->conn->prepare($comando);

    $this->setParametros($stmt, $parametros);

    $stmt->execute();

    return $stmt;
  }

  public function select($comando, $parametros = array()):array
  {
    $stmt = $this->query($comando, $parametros);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>
