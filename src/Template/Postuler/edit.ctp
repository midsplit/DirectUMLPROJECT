<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $postuler->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $postuler->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Postuler'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offresemplois'), ['controller' => 'Offresemplois', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offresemplois'), ['controller' => 'Offresemplois', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postuler form large-9 medium-8 columns content">
    <?= $this->Form->create($postuler) ?>
    <fieldset>
        <legend><?= __('Edit Postuler') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('offresemploi_id', ['options' => $offresemplois]);
            echo $this->Form->input('file_id', ['options' => $files]);
            echo $this->Form->input('Nom');
            echo $this->Form->input('Prenom');
            echo $this->Form->input('Telephone');
            echo $this->Form->input('Email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
