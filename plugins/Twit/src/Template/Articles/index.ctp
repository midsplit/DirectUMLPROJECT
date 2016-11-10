<div class="row">
    <div class="col-md-8">
        <h2><?= __('Articles'); ?></h2>
        <table class="table table-bordered">
            <tr>
                <th><?= $this->Paginator->sort('id'); ?></th>
                <th><?= $this->Paginator->sort('title'); ?></th>
                <th><?= $this->Paginator->sort('body'); ?></th>
                <th><?= $this->Paginator->sort('created'); ?></th>
                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= h($article->id); ?>&nbsp;</td>
                    <td><?= h($article->title); ?>&nbsp;</td>
                    <td><?= h($article->body); ?>&nbsp;</td>
                    <td><?= h($article->created); ?>&nbsp;</td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $article->id], ['class' => 'btn btn-sm btn-default']); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id], ['class' => 'btn btn-sm btn-info']); ?>
                        <?= $this->Form->articleLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # %s?', $article->id), 'class' => 'btn btn-sm btn-danger']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><?= $this->Paginator->counter(); ?></p>
        <ul class="pagination">
            <?php
            echo $this->Paginator->prev('< ' . __('previous'));
            echo $this->Paginator->numbers();
            echo $this->Paginator->next(__('next') . ' >');
            ?>
        </ul>
    </div>
    <div class="dropdown col-md-2">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?= __('Actions'); ?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'btn btn-default']); ?></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <div class="col-md-4">
        <h3></h3>

        
    </div>
</div>