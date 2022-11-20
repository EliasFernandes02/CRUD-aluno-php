<?php 

function abrirConexao (): PDO
{
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '123456';
    $banco = 'alunos';

    $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

    return $conexao;
}