<body class="bg-light">
    <!-- Aqui está o título da página -->
    <h1>Novo usuário</h1>

    <!-- Aqui começa o formulário para cadastrar um novo usuário -->
    <form name="novoUsuario" action="?page=salvar" method="POST" onsubmit="return validarFormulario()">
        <!-- Aqui está um campo oculto para indicar a ação como cadastrar -->
        <input type="hidden" name="acao" value="cadastrar">
        <!-- Aqui está o campo para o nome do novo usuário -->
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <!-- Aqui está o campo para o email do novo usuário -->
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <!-- Aqui está o campo para a senha do novo usuário -->
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <!-- Aqui está o campo para a data de nascimento do novo usuário -->
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nasc" class="form-control" required>
        </div>
        <!-- Aqui estão os botões para salvar o novo usuário e cancelar a operação -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <!-- Aqui está o botão para cancelar a operação e voltar à página Home com validação -->
            <a href="?page=home" class="btn btn-danger float-right" onclick="return validarCancelamento()">Cancelar</a>
        </div>
    </form>
</body>

<!-- Aqui estamos incluindo o script externo -->
<script src="script.js"></script>
