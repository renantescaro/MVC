<?php

class PessoaDao
{
  private $objPessoaM;

  public function setObjPessoaM($objPessoaM)
  {
    $this->objPessoaM = $objPessoaM;
  }

  public function getObjPessoaM()
  {
    return $this->objPessoaM;
  }

  public function select()
  {
    $cnx = new CnxBd();

    $resultado = $cnx->select("SELECT * FROM pessoa");

    $this->objPessoaM->setPessoas($resultado);
  }

  public function insert()
  {

  }

  public function update()
  {

  }

  public function delete()
  {

  }
}

?>
