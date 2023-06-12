<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
    foreach ($_SESSION['usuarios'] as $usuario => $value) {
        $nome = $value['nome'];
        $email = $value['email'];
        $pwd = $value['pwd'];

        if($_POST['email'] == $email && $_POST['pwd'] == $pwd) {
            $usuarioLogado = array (
                'nome' => $nome,
                'email' => $email,
                'pwd' => $pwd
            );
            $_SESSION['logado'] = $usuarioLogado;
            var_dump($_SESSION['logado']);
        }
    }

} else {
    header('location: /login');
    die();
}
?>