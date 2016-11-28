<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Post Images'), ['controller' => 'PostImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post Image'), ['controller' => 'PostImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Post Tags'), ['controller' => 'PostTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post Tag'), ['controller' => 'PostTags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            echo $this->Form->input('status', array('options' => $post::statuses()));
        ?>
    </fieldset>
    <fieldset>
		    <legend><?php __('Tags');?></legend>
		    <?php
      		echo $this->Form->input('tags', array(
      			'label' => __('Tags', true),
      			'type' => 'select',
      			'multiple' => 'checkbox',
      			'options' => $tags
      		));
    		?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
