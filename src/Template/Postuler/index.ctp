<div class="postuler index large-9 medium-8 columns content">
    <h3><?= __('Postuler') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Poste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Scolarité') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postuler as $postuler): ?>
            <?php if($postuler['offresemploi_id'] == $id): ?>
            <tr>
                <td><?= $postuler->has('file') ? $this->Html->link($postuler->file->name, ['controller' => 'Files', 'action' => 'download', $postuler->file->name]) : '' ?></td>
                <td><?= h($postuler->Nom) ?></td>
                <td><?= h($postuler->Prenom) ?></td>
                <td><?= h($postuler->Telephone) ?></td>
                <td><?= h($postuler->Email) ?></td>
                <td><?= h($postuler->poste) ?></td>
                <td><?= h($postuler->scolarite) ?></td>
                <td><button type="button" class="btn btn-secondary"><? echo $this->Form->postLink(__('Détruire '), ['action' => 'delete', $postuler->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postuler->id)]) ?></button></td>
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

    <?php
    echo $this->Form->create();
      
    echo $this->Form->input('Search');
    echo $this->Form->button('Filter', ['type' => 'submit']);
    echo $this->Html->link('Reset', ['action' => 'index']);
    echo $this->Form->end();
    ?>

</div>
