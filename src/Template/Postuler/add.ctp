<div class="postuler form large-9 medium-8 columns content">
    <?php
            $poste = ['Employé' => 'Employé' , 'Stage' => 'Stage', 'Temporaire/Contractuel/Projet' => 'Temporaire/Contractuel/Projet', 'Saisonnier' => 'Saisonnier'];    
            $scolarite = ['Aucun Diplome' => 'Aucun Diplome', 'Diplome d\'étude secondaire' => 'Diplome d\'étude secondaire', 'DEC' => 'DEC', 'Baccalauréat' => 'Baccalauréat', 'Maitrise' => 'Maitrise', 'Doctorat' => 'Doctorat'];
    ?>
    <?= $this->Form->create($postuler) ?>
        <table class="table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><div class="input textarea required"><textarea name="Nom" required="required" maxlength="100000" id="Nom" rows="1"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><div class="input textarea required"><textarea name="Prenom" required="required" maxlength="100000" id="Prenom" rows="1"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><div class="input textarea required"><textarea name="Telephone" required="required" maxlength="100000" id="Telephone" rows="1"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><div class="input textarea required"><textarea name="Email" required="required" maxlength="100000" id="Email" rows="1"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poste') ?></th>
            <td><? echo $this->Form->select('poste', $poste, ['default' => 'Employé']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><? echo $this->Form->select('scolarite' ,$scolarite, ['default' => 'Aucun Diplome']) ?></td>
        </tr>
        </table>
        <?php
            echo $this->Form->hidden('user_id',['value' => $this->request->session()->read('Auth.User.id')]);
            
            echo $this->Form->input('file_id', ['options' => $files ]);
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
