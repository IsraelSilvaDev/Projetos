<?php
// Esta função executa uma ação no banco de dados com base na consulta SQL fornecida e exibe uma mensagem de sucesso ou falha
function executarAcao($sql, $sucessoMensagem, $falhaMensagem)
{
    global $conexao;

    $res = $conexao->query($sql);

    // Aqui estamos verificando se a operação no banco de dados foi bem-sucedida
    if ($res == true) {
        print "<script>alert('$sucessoMensagem');</script>";
    } else {
        print "<script>alert('$falhaMensagem');</script>";
    }
    // Aqui estamos redirecionando para a página de listar usuários após a execução da ação
    print "<script>location.href='?page=listar';</script>";
}

// Aqui começa o switch para determinar a ação a ser executada com base no parâmetro "acao"
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); //para não deixar a senha exposta no banco
        $data_nasc = $_POST["data_nasc"];

        // Aqui está a consulta SQL para adicionar um novo registro no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";

        // Aqui estamos executando a ação com a mensagem correspondente
        executarAcao($sql, 'Usuário cadastrado com sucesso', 'Não foi possível cadastrar o usuário');
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); //para não deixar a senha exposta no banco
        $data_nasc = $_POST["data_nasc"];

        // Aqui está a consulta SQL para editar um registro no banco de dados
        $sql = "UPDATE usuarios SET
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nasc}'
                WHERE
                    id=" . $_REQUEST["id"];

        // Aqui estamos executando a ação com a mensagem correspondente
        executarAcao($sql, 'Usuário editado com sucesso', 'Não foi possível editar o usuário');
        break;
    case 'excluir':
        // Aqui está a consulta SQL para excluir um registro do banco de dados
        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

        // Aqui estamos executando a ação com a mensagem correspondente
        executarAcao($sql, 'Usuário excluído com sucesso', 'Não foi possível excluir o usuário');
        break;
}
?>
