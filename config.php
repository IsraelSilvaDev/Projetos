<?php
// Aqui estamos definindo constantes que serão usadas para fazer a conexão com o banco de dados.

define('HOST', 'localhost'); // Endereço do servidor MySQL
define('USER', 'root');      // Nome de usuário do banco de dados
define('PASSWORD', '');      // Senha do banco de dados
define('BASE', 'projeto');   // Nome do banco de dados

// Aqui estamos utilizando as constantes definidas anteriormente para conectar ao banco de dados.
// Criamos um objeto da classe 'mysqli' e passamos os parâmetros de conexão.
$conexao = new mysqli(HOST, USER, PASSWORD, BASE);