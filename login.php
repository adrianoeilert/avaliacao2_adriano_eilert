<?php
require 'inc/template_superior.php';
?>
<div id="form">
    <h1>
        <center><b>Faça Seu Login:</b></center>
    </h1>
    <br>
    <form class="form-horizontal" action="faz_login.php" method="post" >
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="senha" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="lembrar"> lembre-se de mim
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </div>
    </form>
</div>

<?php
require 'inc/template_inferior.php';
?>