<!--Form with header-->
<div class="container mt-5">
    <div class="card">
        <div class="card-block px-4 py-3">
            <div class="mt-1 mb-2 text-center">
                <h3>Editar Usuário</h3>
            </div>
            <div class="mt-3 text-center mb-3">
                <div id="infoMessage"><?php echo $message; ?></div>
            </div>
            <!--Body-->
            <?php echo form_open(uri_string()); ?>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($first_name); ?>
                        <label for="first_name">Nome</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($last_name); ?>
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($phone); ?>
                        <label for="phone">Telefone</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($company); ?>
                        <label for="company">Empresa</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($password); ?>
                        <label for="password">Senha (mínímo de 8 caracteres)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <?php echo form_input($password_confirm); ?>
                        <label for="password_confirm">Confirme a senha</label>
                    </div>
                </div>
            </div>

            <?php if ($this->ion_auth->is_admin()): ?>

                <h5>Grupos</h5>
                <?php foreach ($groups as $group): ?>
                    <?php
                    $gID = $group['id'];
                    $checked = null;
                    $item = null;
                    foreach ($currentGroups as $grp) {
                        if ($gID == $grp->id) {
                            $checked = ' checked="checked"';
                            break;
                        }
                    }
                    ?>
                    <div class="form-group">
                        <input type="checkbox" id="<?php echo $group['id']; ?>" name="groups[]"
                               value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                        <label for="<?php echo $group['id']; ?>">
                            <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                        </label>
                    </div>
                <?php endforeach ?>

            <?php endif ?>

            <?php echo form_hidden('id', $user->id); ?>
            <?php echo form_hidden($csrf); ?>

            <div class="mt-1 text-center">
                <button class="btn btn-primary">Enviar</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
