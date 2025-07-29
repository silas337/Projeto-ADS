<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];

$efc = $_POST["efc"];
$emc = $_POST["emc"];
$esc = $_POST["esc"];
$pgc = $_POST["pgc"];
$mc = $_POST["mc"];

$empresa = $_POST["empresa"];
$data_admissao = $_POST["admissao"];
$data_demissao = $_POST["demissao"];
$atividade_exercida = $_POST["exercida"];

$descricao = $_POST["descricao"];
$horas = $_POST["horas"];
$ano_conclusao = $_POST["ano_conclusao"];

$informacoes = $_POST["informacoes"];

echo "DADOS PESSOAIS"
  echo $nome; 
  echo $telefone;
  echo $email;
  echo $endereço;
echo "ESCOLARIDADE"
  echo $efc ;
  echo $emc ;
  echo $esc ;
  echo $pgc ;
  echo $mc ;
echo "EXPERIENCIA PROFICIONAL" ;
  echo $empresa ;
  echo $data_admissao ;
  echo $data_demissao;
  echo $atividade_exercida;
echo "CURSOS E IDIOMAS"
  echo $descricao;
  echo $horas ;
  echo $ano_conclusao;
  echo "INFORMAçÕES ADICIONAIS";
  echo $informacoes;
 
?>
