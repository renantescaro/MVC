<<?php

spl_autoload_register(function($nomeClasse)
{

 $nomeArquivo = "controller".DIRECTORY_SEPARATOR.$nomeClasse.".php";

 if(file_exists($nomeArquivo))
 {
   require_once($nomeArquivo);
 }
});

spl_autoload_register(function($nomeClasse)
{

 $nomeArquivo = "model".DIRECTORY_SEPARATOR.$nomeClasse.".php";

 if(file_exists($nomeArquivo))
 {
   require_once($nomeArquivo);
 }
});

spl_autoload_register(function($nomeClasse)
{

 $nomeArquivo = "view".DIRECTORY_SEPARATOR.$nomeClasse.".php";

 if(file_exists($nomeArquivo))
 {
   require_once($nomeArquivo);
 }
});

?>
