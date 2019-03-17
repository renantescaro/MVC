<<?php

class PessoaM
{
  private $nome;
  private $dataNascimento;
  private $genero;
  private $pessoas;

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setDataNascimento($dataNascimento)
  {
    $this->dataNascimento = $dataNascimento;
  }

  public function getDataNascimento()
  {
    return $this->dataNascimento;
  }

  public function setGenero($genero)
  {
    $this->genero = $genero;
  }

  public function getGenero()
  {
    return $this->genero;
  }

  public function setPessoas($pessoas = array())
  {
    $this->pessoas = $pessoas;
  }

  public function getPessoas()
  {
    return $this->pessoas;
  }
}

?>
