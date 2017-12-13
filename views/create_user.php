<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4">
            <div class="mt-1 mb-2 text-center">
                <h3>Novo Usuário</h3>
            </div>
            <div class="mt-3 text-center mb-3">
                <div id="infoMessage"><?php echo $message; ?></div>
            </div>
            <!--Body-->
            <?php echo form_open("auth/create_user");?>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($first_name);?>
                        <label for="first_name">Nome</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($last_name);?>
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="md-form">
                        <?php echo form_input($email);?>
                        <label for="email">E-mail</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="md-form">
                        <?php echo form_input($phone);?>
                        <label for="phone">Telefone</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form">
                        <?php echo form_input($company);?>
                        <label for="company">Empresa</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($password);?>
                        <label for="password">Senha (mínímo de 8 caracteres)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($password_confirm);?>
                        <label for="password_confirm">Confirme a senha</label>
                    </div>
                </div>
            </div>

            <div class="mt-1 text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
