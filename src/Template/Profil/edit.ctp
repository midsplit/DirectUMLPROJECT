    <?php
        $poste = ['Employé' => 'Employé' , 'Stage' => 'Stage', 'Temporaire/Contractuel/Projet' => 'Temporaire/Contractuel/Projet', 'Saisonnier' => 'Saisonnier'];
        $scolarite = ['Aucun Diplome' => 'Aucun Diplome', 'Diplome d\'étude secondaire' => 'Diplome d\'étude secondaire', 'DEC' => 'DEC', 'Baccalauréat' => 'Baccalauréat', 'Maitrise' => 'Maitrise', 'Doctorat' => 'Doctorat'];
    ?>
<h1>Mon Profil</h1>
<table class="table">
    <?= $this->Form->create($profil) ?>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?php echo $this->Form->input('nom', array( 'label' => false )); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?php echo $this->Form->input('prenom', array( 'label' => false )); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?php echo $this->Form->input('email', array( 'label' => false )); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?php echo $this->Form->input('telephone', array( 'label' => false )); ?></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scolarite') ?></th>
            <td><? echo $this->Form->select('scolarite', $scolarite, ['default' => 'Aucun Diplome']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poste') ?></th>
            <td><? echo $this->Form->select('poste', $poste, ['default' => 'Employé']) ?></td>
        </tr>
        <?php echo $this->Form->hidden('user_id', ['value' => $this->request->session()->read('Auth.User.id')]); ?>   
</table>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>