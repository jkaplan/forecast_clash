<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min', 'leaflet', 'L.Control.Sidebar.css','forecast', 'font-awesome.min']) ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <?= $this->Html->script('bootstrap.min'); ?>
    <?= $this->Html->script('leaflet'); ?>
    <?= $this->Html->script('leaflet-heat'); ?>
    <?= $this->Html->script('L.Control.Sidebar'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
     <!-- Navigation -->
<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <div class="container-fluid clearfix">
                <?= $this->fetch('content') ?>
            </div>




            <!-- login script -->
            <?= $this->Html->script('users'); ?>

            <script>
                $(document).ready(function() {

                    $('[data-toggle="tooltip"]').tooltip();
                    $('#sidebar-collapse-btn').click(function(){
                        $( '.sidebar' ).toggleClass('left-230');
                    });
                    $('.mobile-nav-close').click(function(){
                        $( '.sidebar' ).toggleClass('left-230');
                    });
                 });
            </script>

            <footer>
            </footer>
        </div>
    </div>
</body>
</html>
