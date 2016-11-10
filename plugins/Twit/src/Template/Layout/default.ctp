<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $cakeDescription; ?>:
            <?= $this->fetch('title'); ?>
        </title>
        <?= $this->element('head') ?>
    </head>
    <body>

        <?= $this->element('header') ?>

        <div class="container">
            <h1><?= '-'; //$this->Html->link($cakeDescription, 'http://cakephp.org');  ?></h1>

            <?= $this->Flash->render(); ?>

            <?= $this->fetch('content'); ?>
        </div>
        <?= $this->element('footer') ?>
    </body>
</html>