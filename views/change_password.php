<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4 py-3">
            <div class="mt-1 mb-2 text-center">
                <h3>Trocar Senha</h3>
            </div>
            <div class="mt-3 text-center mb-3">
                <div id="infoMessage"><?php echo $message; ?></div>
            </div>
            <!--Body-->
            <?php echo form_open("auth/change_password"); ?>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="md-form">
                        <?php echo form_input($old_password); ?>
                        <label for="old">Senha atual</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($new_password); ?>
                        <label for="new">Nova senha (mínimo de <?php echo $min_password_length; ?> caracteres)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($new_password_confirm); ?>
                        <label for="new_confirm">Confirme a senha</label>
                    </div>
                </div>
            </div>

            <?php echo form_input($user_id); ?>

            <div class="mt-1 text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>