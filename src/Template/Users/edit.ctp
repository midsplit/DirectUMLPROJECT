<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?php echo $this->Form->input('username', array( 'label' => false )); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?php echo $this->Form->input('role', array( 'label' => false )); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?php echo $this->Form->input('password', array( 'label' => false )); ?></td>
        </tr>
    </table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
