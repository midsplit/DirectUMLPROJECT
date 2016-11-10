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
            <td><div class="input text required"><input type="text" name="Titre" required="required" maxlength="100" id="titre"/></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Debut') ?></th>
            <td><div class="input date required"><select name="datedebut[year]"><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016" selected="selected">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option></select><select name="datedebut[month]"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10" selected="selected">October</option><option value="11">November</option><option value="12">December</option></select><select name="datedebut[day]"><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28" selected="selected">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation') ?></th>
            <td><div class="input date required"><select name="creation[year]"><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016" selected="selected">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option></select><select name="creation[month]"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10" selected="selected">October</option><option value="11">November</option><option value="12">December</option></select><select name="creation[day]"><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28" selected="selected">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><div class="input textarea required"><textarea name="descrition" required="required" id="descrition" rows="5"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilités') ?></th>
            <td><div class="input textarea required"><textarea name="responsabilites" required="required" maxlength="100000" id="responsabilites" rows="5"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aptitudes') ?></th>
            <td><div class="input textarea required"><textarea name="aptitudes" required="required" maxlength="100000" id="aptitudes" rows="5"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exigences') ?></th>
            <td><div class="input textarea required"><textarea name="exigences" required="required" maxlength="100000" id="exigences" rows="5"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atouts') ?></th>
            <td><div class="input textarea required"><textarea name="atouts" required="required" maxlength="100000" id="atouts" rows="5"></textarea></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarques') ?></th>
            <td><div class="input textarea required"><textarea name="remarques" required="required" maxlength="100000" id="remarques" rows="5"></textarea></div></td>
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
            <td><div class="input text required"><input type="text" name="metier" required="required" maxlength="100" id="metier"/></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poste') ?></th>
            <td><? echo $this->Form->select('poste', $poste, ['default' => 'Employé']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><? echo $this->Form->select('situation' ,$situation, ['default' => 'Temps Plein']) ?></td>
        </tr>
</table>
<?php echo $this->Form->hidden('user_id',['value' => $this->request->session()->read('Auth.User.id')]); ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
