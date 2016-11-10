<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Postuler'), ['action' => 'edit', $postuler->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Postuler'), ['action' => 'delete', $postuler->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postuler->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Postuler'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Postuler'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offresemplois'), ['controller' => 'Offresemplois', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offresemplois'), ['controller' => 'Offresemplois', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postuler view large-9 medium-8 columns content">
    <h3><?= h($postuler->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $postuler->has('user') ? $this->Html->link($postuler->user->id, ['controller' => 'Users', 'action' => 'view', $postuler->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offresemplois') ?></th>
            <td><?= $postuler->has('offresemplois') ? $this->Html->link($postuler->offresemplois->id, ['controller' => 'Offresemplois', 'action' => 'view', $postuler->offresemplois->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= $postuler->has('file') ? $this->Html->link($postuler->file->name, ['controller' => 'Files', 'action' => 'view', $postuler->file->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($postuler->Nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($postuler->Prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($postuler->Telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($postuler->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($postuler->id) ?></td>
        </tr>
    </table>
</div>
