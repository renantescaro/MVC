<<?php

class PessoaC
{

  private $pessoas;

  public function teste()
  {
    $pessoaM = new PessoaM();
    $pessoaDao = new PessoaDao();

    $pessoaDao->setObjPessoaM($pessoaM);

    $pessoaDao->select();

    $pessoas = $pessoaM->getPessoas();

    foreach ($pessoas as $valor)
    {
      echo($valor['id'])."<br>";
      echo($valor['nome'])."<br>";
      echo($valor['genero'])."<br>";
    }
  }
}

?>
