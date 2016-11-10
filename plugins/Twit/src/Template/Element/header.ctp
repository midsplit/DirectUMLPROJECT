<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/offresemplois"><?= __('Direct Businesses') ?></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav">
        <?php
                $loguser = $this->request->session()->read('Auth.User');
                if (isset($loguser['role']) && $loguser['role'] === 'user') {
                    echo "<li>" . $this->Html->link(__('Offres d\'emplois'), ['controller' => 'Offresemplois', 'action' => 'index']) . "</li>";
                } 
                if (isset($loguser['role']) && $loguser['role'] === 'entreprise') {
                    echo "<li>" . $this->Html->link(__('Offres d\'emplois'), ['controller' => 'Offresemplois', 'action' => 'index']) . "</li>";
                    echo "<li>" . $this->Html->link(__('Ajouter une offres d\'emploi'), ['controller' => 'Offresemplois', 'action' => 'add']) . "</li>";
                    echo "<li>" . $this->Html->link(__('Consulter mes offres d\'emplois'), ['controller' => 'Offresemplois', 'action' => 'myoffers']) . "</li>";
                }
                if (isset($loguser['role']) && $loguser['role'] === 'admin') {
                    echo "<li>" . $this->Html->link(__('Offres d\'emplois'), ['controller' => 'Offresemplois', 'action' => 'index']) . "</li>";
                    echo "<li>" . $this->Html->link(__('Ajouter une offres d\'emploi'), ['controller' => 'Offresemplois', 'action' => 'add']) . "</li>";
                    echo "<li>" . $this->Html->link(__('Ajouter un utilisateur'), ['controller' => 'Users', 'action' => 'addadmin']) . "</li>";
                    echo "<li>" . $this->Html->link(__('Consulter mes offres d\'emplois'), ['controller' => 'Offresemplois', 'action' => 'myoffers']) . "</li>";
                    echo "<li>" . $this->Html->link(__('Liste de tous les utilisateurs'), ['controller' => 'Users', 'action' => 'index']) . "</li>";
                }
        ?>
    </ul>

        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
                $loguser = $this->request->session()->read('Auth.User');
                if ($loguser) {
                    $user = $loguser['username'];
                    echo $user;
                } else {         
                    echo "Se Connecter/S'enregister";
                }
            ?><span class="caret"></span></a>

            <ul class="dropdown-menu">
            <?php
                $loguser = $this->request->session()->read('Auth.User');
                if (isset($loguser['role']) && $loguser['role'] === 'user') {
                    echo "<li>" . $this->Html->link(' Ajouter un CV', ['controller' => 'Files', 'action' => 'add']) . "</li>";
                    echo "<li>" . $this->Html->link(' Mes CVs', ['controller' => 'Files', 'action' => 'index']) . "</li>";
                    echo "<li>" . $this->Html->link(' Mon Profil', ['controller' => 'Profil', 'action' => 'edit']) . "</li>";
                    echo "<li>" . $this->Html->link(' Deconnecter', ['controller' => 'Users', 'action' => 'logout']) . "</li>";
                }
                if (isset($loguser['role']) && $loguser['role'] === 'admin') {
                    echo "<li>" . $this->Html->link(' Ajouter un CV', ['controller' => 'Files', 'action' => 'add']) . "</li>";
                    echo "<li>" . $this->Html->link(' Mes CVs', ['controller' => 'Files', 'action' => 'index']) . "</li>";
                    echo "<li>" . $this->Html->link(' Mon Profil', ['controller' => 'Profil', 'action' => 'edit']) . "</li>";
                    echo "<li>" . $this->Html->link(' Deconnecter', ['controller' => 'Users', 'action' => 'logout']) . "</li>";
                }
                if (isset($loguser['role']) && $loguser['role'] === 'entreprise') {
                    echo "<li>" . $this->Html->link(' Deconnecter', ['controller' => 'Users', 'action' => 'logout']) . "</li>";
                }
                if(!isset($loguser['role'])) {
                    echo "<li>" . $this->Html->link('Se Connecter', ['controller' => 'Users', 'action' => 'login']) . "</li>";
                    echo "<li>" . $this->Html->link(__('S\'enregister'), ['controller' => 'Users', 'action' => 'add']) . "</li>";
                }
            ?>      
            </ul>
        </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>