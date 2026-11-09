<?php


$nome = $_GET['Nome'];
$email = $_GET['gmail'];
$phone = $_GET['phone'];

echo "<ul>";

echo "<li> Nome:" .$nome. "<br>";
echo "<li> E-Mail:" .$email. "<br>";
echo "<li> Telefone:" .$phone. "<br>";
echo"</ul>";


//Pesquisa

$nome = $_GET['Nome'] ?? '';
$email = $_GET['gmail'] ?? '';
$phone = $_GET['phone'] ?? '';

$pesquisa = $_GET['pesquisa'];

$pesquisa = $_GET['pesquisa'] ?? '';

if ($pesquisa != '' && stripos($nome, $pesquisa) !== false) {

    echo "<ul>";
    echo "<li>Nome: $nome</li>";
    echo "<li>E-mail: $email</li>";
    echo "<li>Telefone: $phone</li>";
    echo "</ul>";

} else {

    echo "Nenhum contato encontrado.";

}
