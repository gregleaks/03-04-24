<?php
require_once('./conexao.php');

// Verifica se os campos de login e senha foram enviados através do formulário
if(isset($_POST['txtLogin']) && isset($_POST['txtSenha'])) {
    $txtLogin = $_POST['txtLogin'];
    $txtSenha = $_POST['txtSenha'];

    // Aqui você pode adicionar a lógica de validação do login e senha
    // Por exemplo, verificar no banco de dados se as credenciais são válidas

    // Exemplo simples de validação - Verifica se o login é "admin" e a senha é "admin123"
    if($txtLogin === 'admin' && $txtSenha === 'admin123') {
        echo "Login bem-sucedido! Bem-vindo, $txtLogin.";
        // Aqui você pode redirecionar o usuário para outra página, exibir conteúdo protegido, etc.
    } else {
        echo "Login ou senha inválidos.";
        // Aqui você pode redirecionar o usuário de volta para a página de login ou exibir uma mensagem de erro
    }
} else {
    // Se os campos de login e senha não foram enviados, exibe uma mensagem de erro
    echo "Por favor, preencha todos os campos.";
}
?>
