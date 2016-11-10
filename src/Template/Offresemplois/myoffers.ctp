<div class="offresemplois index large-9 medium-8 columns content">
    <h3><?= __('Mes offres d\'emplois') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date de création') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Scolarité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Secteur d\'activité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Métier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date de début du travail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offresemplois as $offresemplois): ?>
            <?php $loguserid = $this->request->session()->read('Auth.User.id');
                  if ($offresemplois->user_id === $loguserid): ?>
            <tr>
                <td><?= h($offresemplois->Titre) ?></td>
                <td><?= h($offresemplois->creation) ?></td>
                <td><?= h($offresemplois->scolarite) ?></td>
                <td><?= h($offresemplois->secteuractivite) ?></td>
                <td><?= h($offresemplois->metier) ?></td>
                <td><?= h($offresemplois->datedebut) ?></td>
                <td class="actions">
                    <?php
                        $loguser = $this->request->session()->read('Auth.User'); ?>
                        <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Visualiser '), ['action' => 'view', $offresemplois->id]) ?></button>
                        <?php if ($loguser['id'] === $offresemplois->user_id) { ?>
                            <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Éditer '), ['action' => 'edit', $offresemplois->id]) ?></button>
                            <button type="button" class="btn btn-secondary"><? echo $this->Form->postLink(__('Détruire '), ['action' => 'delete', $offresemplois->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)]) ?></button>
                            <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Voir Offres '), ['controller' => 'postuler', 'action' => 'index', $offresemplois->id]) ?></button>
                        <?php }
                        if (isset($loguser['role']) && $loguser['role'] === 'admin') { ?>
                            <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Éditer '), ['action' => 'edit', $offresemplois->id]) ?></button>
                            <button type="button" class="btn btn-secondary"><? echo $this->Form->postLink(__('Détruire '), ['action' => 'delete', $offresemplois->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)]) ?></button>
                            <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Postuler '), ['controller' => 'postuler', 'action' => 'add', $offresemplois->id]) ?></button>
                            <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Voir Offres '), ['controller' => 'postuler', 'action' => 'index', $offresemplois->id]) ?></button>
                        <? }
                        if (isset($loguser['role']) && $loguser['role'] === 'utilisateur') { ?>
                            <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Postuler '), ['controller' => 'postuler', 'action' => 'add']) ?></button>
                        <? } ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
