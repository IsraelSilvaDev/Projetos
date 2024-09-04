<body class="bg-light">
    <!-- Aqui está o título da página -->
    <h1>Listar usuários</h1>
    <!-- Aqui começa o container responsivo para a tabela -->
    <div class="table-responsive">
        <?php
        // Aqui estamos criando uma consulta SQL para listar os dados dos usuários
        $sql = "SELECT * FROM usuarios";
        // Aqui estamos executando a consulta SQL e armazenando o resultado
        $res = $conexao->query($sql);
        // Aqui estamos obtendo a quantidade de resultados
        $qtd = $res->num_rows;
        // Aqui estamos verificando se encontramos resultados
        if ($qtd > 0) {
            // Aqui começamos a tabela para exibir os usuários
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<thead class='thead-light'>";
            print "<tr>";
            // Aqui estão os cabeçalhos da tabela
            print "<th class='align-middle'>Código</th>";
            print "<th class='align-middle'>Nome</th>";
            print "<th class='align-middle'>E-mail</th>";
            print "<th class='align-middle'>Data de Nascimento</th>";
            print "<th class='align-middle'>Ações</th>";
            print "</tr>";
            print "</thead>";
            print "<tbody>";

            // Aqui começa o loop para exibir os dados de cada usuário
            while ($row = $res->fetch_object()) {
                print "<tr>";
                // Aqui está a coluna com o ID do usuário
                print "<td class='align-middle'>" . $row->id . "</td>";
                // Aqui está a coluna com o nome do usuário
                print "<td class='align-middle'>" . $row->nome . "</td>";
                // Aqui está a coluna com o e-mail do usuário
                print "<td class='align-middle'>" . $row->email . "</td>";
                // Aqui está a coluna com a data de nascimento do usuário
                print "<td class='align-middle'>" . $row->data_nasc . "</td>";
                // Aqui está a coluna com botões de ação para editar e excluir o usuário
                print "<td class='align-middle'>";
                print "<div class='btn-group'>";
                // Aqui está o botão para editar o usuário
                print "<button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success me-1'>Editar</button>";
                // Aqui está o botão para excluir o usuário
                print "<button onclick=\"if(confirm('Tem certeza que deseja excluir este usuário?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>";
                print "</div>";
                print "</td>";
                print "</tr>";
            }

            print "</tbody>";
            print "</table>";

            // Aqui está o botão "Voltar"
            print "<div class='text-right mt-3'>
                    <a href='?page=home' class='btn btn-primary'>Voltar</a>
                </div>";
        } else {
            // Aqui está a mensagem quando não há resultados
            print "<p class='alert alert-danger'>Nenhum usuário encontrado!</p>";
            print "<div class='text-right mt-3'>
                    <a href='?page=home' class='btn btn-primary'>Voltar</a>
                </div>";
        }
        ?>
    </div>
</body>