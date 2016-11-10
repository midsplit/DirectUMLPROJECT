<div class="offresemplois form large-9 medium-8 columns content" class="form-group">
<?= $this->Form->create($offresemplois) ?>
        <?php
        $poste = ['Employé' => 'Employé' , 'Stage' => 'Stage', 'Temporaire/Contractuel/Projet' => 'Temporaire/Contractuel/Projet', 'Saisonnier' => 'Saisonnier'];
        $situation = ['Temps Plein' => 'Temps Plein', 'Temps Partiel' => 'Temps Partiel', 'Journalier' => 'Journalier'];
        $scolarite = ['Aucun Diplome' => 'Aucun Diplome', 'Diplome d\'étude secondaire' => 'Diplome d\'étude secondaire', 'DEC' => 'DEC', 'Baccalauréat' => 'Baccalauréat', 'Maitrise' => 'Maitrise', 'Doctorat' => 'Doctorat'];
        $secteuractivite = ['Administrations publiques' => 'Administrations publiques', 'Ariculture, foresterie, pêche et chasse' => 'Ariculture, foresterie, pêche et chasse', 'Ats, spectacles et loisirs' => 'Ats, spectacles et loisirs',
            'Autres services' => 'Autres services', 'Commerce de détail' => 'Commerce de détail', 'Commerce de gros' => 'Commerce de gros', 'Construction' => 'Construction',  'Extraction minière, exploitation en carrière, et extraction de pétrole et de gaz' => ' Extraction minière, exploitation en carrière, et extraction de pétrole et de gaz',
            'Fabrication' => 'Fabrication', 'Finance et assurances' => 'Finance et assurances', 'Gestion de sociétés et d\’entreprises' => 'Gestion de sociétés et d\’entreprises', 'Hébergement et services de restauration' => 'Hébergement et services de restauration',
            'Information et culture' => 'Information et culture', 'Administration' => 'Administration', 'Enseignement' => 'Enseignement', 'Restauration' => 'Restauration', 'Immobilier' => 'Immobilier', 'Sciences' => 'Sciences',
            'Santé et assistance' => 'Santé et assistance', 'Transport et entreposage' => 'Transport et entreposage'];
        
    ?>
<table class="table">
    <tr>
        <th scope="row"><?= __('Titre') ?></th>
        <td><?php echo $this->Form->input('Titre', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Création') ?></th>
        <td><?php echo $this->Form->input('creation', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Description') ?></th>
        <td><?php echo $this->Form->input('descrition', array( 'label' => false ));  ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Responsabilités') ?></th>
        <td><?php  echo $this->Form->input('responsabilites', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Aptitudes') ?></th>
        <td><?php echo $this->Form->input('aptitudes', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Exigences') ?></th>
        <td><?php  echo $this->Form->input('exigences', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Atouts') ?></th>
        <td><?php echo $this->Form->input('atouts', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Remarques') ?></th>
        <td><?php echo $this->Form->input('remarques', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Scolarité') ?></th>
        <td><? echo $this->Form->select('scolarite', $scolarite, ['default' => 'Aucun Diplome']) ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Secteur d\'activité') ?></th>
        <td><? echo $this->Form->select('secteuractivite', $secteuractivite, ['default' => 'Administrations publiques']) ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Métier') ?></th>
        <td><?php echo $this->Form->input('metier', array( 'label' => false )); ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Poste') ?></th>
        <td><? echo $this->Form->select('poste', $poste, ['default' => 'Employé']) ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Situation') ?></th>
        <td><? echo $this->Form->select('situation' ,$situation, ['default' => 'Temps Plein']) ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('Date de bébut') ?></th>
        <td><?php echo $this->Form->input('datedebut', array( 'label' => false )); ?></td>
    </tr>
</table>

<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

