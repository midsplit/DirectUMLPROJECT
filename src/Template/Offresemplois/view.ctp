<h3><?= h($offresemplois->Titre) ?></h3>
<table class="table">
        <tr>
            <th scope="row"><?= __('Scolarite') ?></th>
            <td><textarea readonly class="form-control" rows="1"><?= h($offresemplois->scolarite) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secteur d\'activite') ?></th>
            <td><textarea readonly class="form-control" rows="1"><?= h($offresemplois->secteuractivite) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metier') ?></th>
            <td><textarea readonly class="form-control" rows="1"><?= h($offresemplois->metier) ?></textarea></td>
        </tr>
        <tr >
            <th scope="row"><?= __('Date de debut') ?></th>
            <td><textarea readonly class="form-control" rows="1"><?= h($offresemplois->datedebut) ?></textarea></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Descrition') ?></th>
            <td><textarea readonly class="form-control" rows="4"><?= h($offresemplois->description) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilités') ?></th>
            <td><textarea readonly class="form-control" rows="4"><?= h($offresemplois->responsabilites) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aptitudes') ?></th>
            <td><textarea readonly class="form-control" rows="2"><?= h($offresemplois->aptitudes) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exigences') ?></th>
            <td><textarea readonly class="form-control" rows="2"><?= h($offresemplois->exigences) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atouts') ?></th>
            <td><textarea readonly class="form-control" rows="2"><?= h($offresemplois->atouts) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarques') ?></th>
            <td><textarea readonly class="form-control" rows="2"><?= h($offresemplois->remarques) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poste') ?></th>
            <td><textarea readonly class="form-control" rows="1"><?= h($offresemplois->poste) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><textarea readonly class="form-control" rows="1"><?= h($offresemplois->situation) ?></textarea></td>
        </tr>
</table>

<?php $loguser = $this->request->session()->read('Auth.User'); ?>

<? if (isset($loguser['role']) && $loguser['role'] === 'utilisateur') { ?>
    <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Postuler '), ['controller' => 'postuler', 'action' => 'add', ]) ?></button>
<? } ?>

<? if (isset($loguser['role']) && $loguser['role'] === 'admin') { ?>
    <button type="button" class="btn btn-secondary"><? echo $this->Html->link(__('Postuler '), ['controller' => 'postuler', 'action' => 'add', $offresemplois->id]) ?></button>
<? } ?>