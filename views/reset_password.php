<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4">
            <div class="mt-1 mb-2 text-center">
                <h3>Redefinir Senha</h3>
            </div>
            <div class="mt-3 text-center mb-3">
                <div id="infoMessage"><?php echo $message; ?></div>
            </div>
            <!--Body-->
            <?php echo form_open('auth/reset_password/' . $code);?>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($new_password);?>
                        <label>Nova senha (mínimo de 8 caracteres)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($new_password_confirm);?>
                        <label>Confirme a senha</label>
                    </div>
                </div>
            </div>

            <?php echo form_input($user_id);?>
            <?php echo form_hidden($csrf); ?>

            <div class="mt- text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>

