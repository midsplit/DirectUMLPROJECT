<div class="profil index large-9 medium-8 columns content">
    <h3><?= __('Profil') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scolarite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poste') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profil as $profil): ?>
            <tr>
                <td><?= h($profil->nom) ?></td>
                <td><?= h($profil->prenom) ?></td>
                <td><?= h($profil->email) ?></td>
                <td><?= h($profil->telephone) ?></td>
                <td><?= h($profil->scolarite) ?></td>
                <td><?= h($profil->poste) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profil->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profil->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?>
                </td>
            </tr>
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
