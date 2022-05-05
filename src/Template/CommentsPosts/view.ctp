<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CommentsPost $commentsPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comments Post'), ['action' => 'edit', $commentsPost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comments Post'), ['action' => 'delete', $commentsPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentsPost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comments Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comments Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments Posts'), ['controller' => 'CommentsPosts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comments Post'), ['controller' => 'CommentsPosts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commentsPosts view large-9 medium-8 columns content">
    <h3><?= h($commentsPost->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($commentsPost->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($commentsPost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments Post Id') ?></th>
            <td><?= $this->Number->format($commentsPost->comments_post_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($commentsPost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($commentsPost->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comments Posts') ?></h4>
        <?php if (!empty($commentsPost->comments_posts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Comments Post Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($commentsPost->comments_posts as $commentsPosts): ?>
            <tr>
                <td><?= h($commentsPosts->id) ?></td>
                <td><?= h($commentsPosts->message) ?></td>
                <td><?= h($commentsPosts->comments_post_id) ?></td>
                <td><?= h($commentsPosts->created) ?></td>
                <td><?= h($commentsPosts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CommentsPosts', 'action' => 'view', $commentsPosts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CommentsPosts', 'action' => 'edit', $commentsPosts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CommentsPosts', 'action' => 'delete', $commentsPosts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentsPosts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
