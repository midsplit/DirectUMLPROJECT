<div class="files index large-9 medium-8 columns content">
    <h3><?= __('Mes CV') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Fichier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <?php $loguserid = $this->request->session()->read('Auth.User.id');
            if ($file->user_id === $loguserid): ?>
            <tr>
                <td><?= $this->Html->link($file->name, ['controller' => 'Files', 'action' => 'download', $file->name]) ?></td>
                <td><?= h($file->name) ?></td>
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
