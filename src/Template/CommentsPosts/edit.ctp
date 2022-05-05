<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CommentsPost $commentsPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commentsPost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commentsPost->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comments Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments Posts'), ['controller' => 'CommentsPosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comments Post'), ['controller' => 'CommentsPosts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commentsPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($commentsPost) ?>
    <fieldset>
        <legend><?= __('Edit Comments Post') ?></legend>
        <?php
            echo $this->Form->control('message');
            echo $this->Form->control('comments_post_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
