<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Images'), ['controller' => 'PostImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Image'), ['controller' => 'PostImages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Tags'), ['controller' => 'PostTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Tag'), ['controller' => 'PostTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $post->has('user') ? $this->Html->link($post->user->name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $post->has('category') ? $this->Html->link($post->category->title, ['controller' => 'Categories', 'action' => 'view', $post->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($post->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($post->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($post->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Post Images') ?></h4>
        <?php if (!empty($post->post_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Post Id') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->post_images as $postImages): ?>
            <tr>
                <td><?= h($postImages->image_id) ?></td>
                <td><?= h($postImages->post_id) ?></td>
                <td><?= h($postImages->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostImages', 'action' => 'view', $postImages->image_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostImages', 'action' => 'edit', $postImages->image_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostImages', 'action' => 'delete', $postImages->image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $postImages->image_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Post Tags') ?></h4>
        <?php if (!empty($post->post_tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Post Id') ?></th>
                <th scope="col"><?= __('Tag Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->post_tags as $postTags): ?>
            <tr>
                <td><?= h($postTags->post_id) ?></td>
                <td><?= h($postTags->tag_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostTags', 'action' => 'view', $postTags->post_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostTags', 'action' => 'edit', $postTags->post_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostTags', 'action' => 'delete', $postTags->post_id], ['confirm' => __('Are you sure you want to delete # {0}?', $postTags->post_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
