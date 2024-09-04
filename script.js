// Função para validar o cancelamento com alerta se houver conteúdo preenchido na página novo usuário
function validarCancelamento() {
    var campos = document.getElementsByTagName("input");
    for (var i = 0; i < campos.length; i++) {
        if (campos[i].type !== "hidden" && campos[i].value.trim() !== "") {
            return confirm('Deseja realmente cancelar? Todos os dados preenchidos serão perdidos.');
        }
    }
    return true;
}

// Validação de campos preenchidos da página novo usuário
function validarFormulario() {
    var nome = document.forms["novoUsuario"]["nome"].value;
    var email = document.forms["novoUsuario"]["email"].value;
    var senha = document.forms["novoUsuario"]["senha"].value;
    var dataNasc = document.forms["novoUsuario"]["data_nasc"].value;

    // Verificar se os campos estão vazios
    if (nome == "" || email == "" || senha == "" || dataNasc == "") {
        alert("Por favor, preencha todos os campos.");
        return false;
    }

    // Verificar se o e-mail é válido
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        alert("Por favor, insira um e-mail válido.");
        return false;
    }

    // Verificar se a data de nascimento é válida e se o usuário tem pelo menos 18 anos
    var hoje = new Date();
    var dataNascimento = new Date(dataNasc);
    var idade = hoje.getFullYear() - dataNascimento.getFullYear();
    var mes = hoje.getMonth() - dataNascimento.getMonth();

    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNascimento.getDate())) {
        idade--;
    }

    if (idade < 18) {
        alert("Você não pode ter menos que 18 anos.");
        return false;
    }

    return true;
}

// Validação de campos preenchidos da página editar usuário
function validarFormularioEdit() {
    var nome = document.forms["editarUsuario"]["nome"].value;
    var email = document.forms["editarUsuario"]["email"].value;
    var senha = document.forms["editarUsuario"]["senha"].value;
    var dataNasc = document.forms["editarUsuario"]["data_nasc"].value;

    // Verificar se os campos estão vazios
    if (nome == "" || email == "" || senha == "" || dataNasc == "") {
        alert("Por favor, preencha todos os campos.");
        return false;
    }

    // Verificar se o e-mail é válido
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        alert("Por favor, insira um e-mail válido.");
        return false;
    }

    // Verificar se a data de nascimento é válida e se o usuário tem pelo menos 18 anos
    var hoje = new Date();
    var dataNascimento = new Date(dataNasc);
    var idade = hoje.getFullYear() - dataNascimento.getFullYear();
    var mes = hoje.getMonth() - dataNascimento.getMonth();

    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNascimento.getDate())) {
        idade--;
    }

    if (idade < 18) {
        alert("Você não pode ter menos que 18 anos.");
        return false;
    }

    return true;
}

// Validação do cancelamento de um novo cadastro da página Novo Usuário.
function validarCancelamentoNovoCadastro() {
    return confirm("Deseja realmente cancelar o cadastro? Todos os dados preenchidos serão perdidos.");
}

// Validação do cancelamento da edição de um usuário já existente
function cancelarEdicao() {
    var confirmacao = confirm("Tem certeza que deseja cancelar a edição? Todas as alterações serão perdidas.");

    if (confirmacao) {
        window.location.href = '?page=home';
    }
}
