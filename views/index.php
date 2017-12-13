<div class="container mr-auto pt-2 mt-3">

    <h3 class="text-center">Usuários</h3>

    <div id="infoMessage"><?= '<b>' . $message . '</b>' ?></div>

    <!-- Desktop navigation  -->
    <div class="mt-3 mb-2 hidden-xs-down">

        <div class="row justify-content-end">

            <div class="col-12 col-md-6">
                <div class="text-right">
                    <a href="<?= base_url('auth/create_user') ?>" class="btn btn-primary">Novo Usuário</a>
                    <a href="<?= base_url('auth/create_group') ?>" class="btn btn-primary">Novo Grupo</a>
                </div>
            </div>

        </div>
    </div>
    <!--/ Desktop navigation  -->

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th><?php echo lang('index_fname_th'); ?></th>
            <th><?php echo lang('index_lname_th'); ?></th>
            <th><?php echo lang('index_email_th'); ?></th>
            <th><?php echo lang('index_groups_th'); ?></th>
            <th><?php echo lang('index_status_th'); ?></th>
            <th><?php echo lang('index_action_th'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                <td>
                    <?php foreach ($user->groups as $group): ?>
                        <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'), 'class="m-0"'); ?>
                        <br/>
                    <?php endforeach ?>
                </td>
                <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link'), 'class="m-0"') : anchor("auth/activate/" . $user->id, lang('index_inactive_link'), 'class="m-0"'); ?></td>
                <td><a href="<?= base_url('auth/edit_user/'.$user->id) ?>"><i class="fa fa-pencil"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>