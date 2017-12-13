<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4">
            <div class="mt-1 mb-2 text-center">
                <h3>Novo Grupo</h3>
            </div>
            <div class="mt-3 text-center mb-3">
                <div id="infoMessage"><?php echo $message; ?></div>
            </div>
            <!--Body-->
            <?php echo form_open("auth/create_group");?>

            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="md-form">
                        <?php echo form_input($group_name);?>
                        <label for="group_name">Nome</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="md-form">
                        <?php echo form_input($description);?>
                        <label for="description">Descrição</label>
                    </div>
                </div>
            </div>

            <div class="mt- text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
