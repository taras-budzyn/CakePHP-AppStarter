<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post Image'), ['action' => 'edit', $postImage->image_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post Image'), ['action' => 'delete', $postImage->image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $postImage->image_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Post Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postImages view large-9 medium-8 columns content">
    <h3><?= h($postImage->image_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= $postImage->has('post') ? $this->Html->link($postImage->post->title, ['controller' => 'Posts', 'action' => 'view', $postImage->post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Id') ?></th>
            <td><?= $this->Number->format($postImage->image_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($postImage->url)); ?>
    </div>
</div>
