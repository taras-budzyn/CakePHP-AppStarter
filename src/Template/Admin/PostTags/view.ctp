<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post Tag'), ['action' => 'edit', $postTag->post_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post Tag'), ['action' => 'delete', $postTag->post_id], ['confirm' => __('Are you sure you want to delete # {0}?', $postTag->post_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Post Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postTags view large-9 medium-8 columns content">
    <h3><?= h($postTag->post_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= $postTag->has('post') ? $this->Html->link($postTag->post->title, ['controller' => 'Posts', 'action' => 'view', $postTag->post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $postTag->has('tag') ? $this->Html->link($postTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $postTag->tag->id]) : '' ?></td>
        </tr>
    </table>
</div>
