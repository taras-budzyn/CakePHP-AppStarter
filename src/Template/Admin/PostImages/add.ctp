<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Post Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postImages form large-9 medium-8 columns content">
    <?= $this->Form->create($postImage, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Post Image') ?></legend>
        <?php
            echo $this->Form->input('post_id', ['options' => $posts]);
            // echo $this->Form->input('url');
            echo $this->Form->input('post_photo', ['type' => 'file', 'multiple' => 'multiple', 'label' => 'Add Some Photos']);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
