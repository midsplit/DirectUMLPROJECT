<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Ajouter un utilisateur') ?></legend>
        <?php
        echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('role', ['options' => ['user' => 'Utilisateur', 'entreprise' => 'Entreprise', 'admin' => 'Admin']], ['default' => 'user']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
