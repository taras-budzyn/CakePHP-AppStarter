<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissions view large-9 medium-8 columns content">
    <h3><?= h($permission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $permission->has('user') ? $this->Html->link($permission->user->name, ['controller' => 'Users', 'action' => 'view', $permission->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $permission->has('category') ? $this->Html->link($permission->category->title, ['controller' => 'Categories', 'action' => 'view', $permission->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($permission->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rule') ?></th>
            <td><?= $permission::statuses($permission->rule) ?></td>
        </tr>
    </table>
</div>
