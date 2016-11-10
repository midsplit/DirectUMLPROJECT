<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profil'), ['action' => 'edit', $profil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profil'), ['action' => 'delete', $profil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profil'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profil view large-9 medium-8 columns content">
    <h3><?= h($profil->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $profil->has('user') ? $this->Html->link($profil->user->id, ['controller' => 'Users', 'action' => 'view', $profil->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($profil->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($profil->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($profil->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($profil->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scolarite') ?></th>
            <td><?= h($profil->scolarite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poste') ?></th>
            <td><?= h($profil->poste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profil->id) ?></td>
        </tr>
    </table>
</div>
