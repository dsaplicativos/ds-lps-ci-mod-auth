<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4 py-3">
            <div class="mt-1 mb-2 text-center">
                <h3>Login</h3>
            </div>
            <div class="mt-3 text-center mb-3">
                <div id="infoMessage"><?php echo $message; ?></div>
            </div>
            <!--Body-->
            <?php echo form_open("auth/login"); ?>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($identity); ?>
                        <label for="identity">E-mail</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($password); ?>
                        <label for="password">Senha</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox" id="remember" name="remember" value="1">
                <label for="remember">Lembrar-me</label>
            </div>

            <div class="mt- text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
            <p><a href="forgot_password">Esqueceu a senha?</a></p>
        </div>
    </div>
</div>


