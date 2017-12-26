<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4 py-3">
            <div class="mt-1 mb-2 text-center">
                <h3>Desativar Usuário</h3>
                <h5><?= ucwords(mb_strtolower($user->username)) ?></h5>
            </div>
            <div class="mt-3 text-center mb-3">
<!--                <div id="infoMessage">--><?php //echo $message; ?><!--</div>-->
            </div>
            <!--Body-->
            <?php echo form_open("auth/deactivate/" . $user->id); ?>

            <div class="row mt-3">
                <div class="col-md-10 mx-auto text-center">
                    <div class="form-group">
                        <input name="confirm" type="radio" id="sim" value="yes" checked="checked">
                        <label for="sim">Sim</label>
                    </div>

                    <div class="form-group">
                        <input name="confirm" type="radio" id="nao" value="no">
                        <label for="nao">Não</label>
                    </div>
                </div>
            </div>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(array('id' => $user->id)); ?>

            <div class="mt- text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>

