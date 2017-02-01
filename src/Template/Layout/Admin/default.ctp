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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
            
        </ul>
        <div class="top-bar-section">
          <?php if ($this->request->Session()->read('Auth.User')): ?>
            <ul class="left">
                <li class="name">
                    <a href="/admin/posts"><?= __('Posts'); ?></a>
                </li>
                <li class="name">
                    <a href="/admin/users"><?= __('Users'); ?></a>
                </li>
                <li class="name">
                    <a href="/admin/categories"><?= __('Categories'); ?></a>
                </li>
                <li class="name">
                    <a href="/admin/tags"><?= __('Tags'); ?></a>
                </li>
            </ul>
            <ul class="right">
                <li><a target="_blank" href="/"><?= __('Open site'); ?></a></li>
                <li><a href="/admin/users/logout"><?= __('Logout'); ?></a></li>
            </ul>
          <?php endif; ?>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
