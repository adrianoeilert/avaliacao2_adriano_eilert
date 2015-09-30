<?php
require 'inc/template_superior.php';
$nome = '';
$usuario = '';
$acao = 'Cadastrar';
$action = 'cadastrar_funcionario.php';
$erro_busca = false;
if (isset($_GET['id_funcionario'])) {
    $acao = 'Editar';
    $action = 'atualizar_funcionario.php';
    $id_funcionario = $_GET['id_funcionario'];

    $mysqli = new mysqli("127.0.0.1", "root", "1234", "pedro");

    $con = $mysqli->prepare("SELECT id, nome, usuario FROM usuarios WHERE id = ?");

    $con->bind_param("i", $id_funcionario);

    $con->execute();

    $con->bind_result($id, $nome, $usuario);

    if (!$con->fetch()) {
        $erro_busca = true;
    }

    $con->close();
}
?>
<div id ='form'>
    <?php
    if ($erro_busca) {
        echo '<h2>Erro: Usuário não existente</h2>';
    } else {
        ?>
        <h1>
            <center><b> <?php echo $acao; ?> Funcionário</b></center>
        </h1>
        <form class="form-horizontal" method="post" action="<?php echo $action; ?>">

            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $nome; ?>" class="form-control" id="inputNome" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" <?php
                    if (isset($usuario) && $usuario != '') {
                        echo 'disabled';
                    }
                    ?> value="<?php echo $usuario; ?>" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Senha:</label>
                <div class="col-sm-10">
                    <input type="password" <?php
                    if (isset($usuario) && $usuario != '') {
                        echo 'disabled';
                    }
                    ?> class="form-control" id="inputPassword" placeholder="Senha" name="senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">
                        <?php echo $acao; ?>
                    </button>
                </div>
            </div>
        </form>
        <?php
    }
    ?>
</div>
<?php
require 'inc/template_inferior.php';
?>