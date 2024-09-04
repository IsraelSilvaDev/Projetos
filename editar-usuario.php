<!-- Aqui começamos o corpo da página HTML onde os usuários serão editados -->

<body class="bg-light">
    <!-- Aqui definimos o título da página -->
    <h1>Editar usuários</h1>

    <?php
    // Aqui estamos construindo uma consulta SQL para selecionar os dados do usuário com base no ID fornecido.
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
    // Aqui estamos executando a consulta SQL e armazenando o resultado.
    $res = $conexao->query($sql);
    // Aqui estamos obtendo o objeto que representa a linha do usuário que será editado.
    $row = $res->fetch_object();
    ?>

    <!-- Aqui começa o formulário para editar as informações do usuário -->
    <form name="editarUsuario" action="?page=salvar" method="POST" onsubmit="return validarFormularioEdit()">
        <!-- Aqui estão campos ocultos para enviar a ação e o ID do usuário -->
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <!-- Aqui está o campo para o nome do usuário -->
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
        </div>
        <!-- Aqui está o campo para o email do usuário -->
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
        </div>
        <!-- Aqui está o campo para a senha do usuário -->
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" value="<?php print $row->senha; ?>" class="form-control">
        </div>
        <!-- Aqui está o campo para a data de nascimento do usuário -->
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
        </div>
        <!-- Aqui estão os botões para salvar as alterações e cancelar a edição -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-danger" onclick="cancelarEdicao()">Cancelar</button>
        </div>
    </form>
</body>

<!-- Aqui estamos incluindo o script externo para manipulação do formulário -->
<script src="script.js"></script>