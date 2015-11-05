<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $likert->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $likert->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Likerts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="likerts form large-9 medium-8 columns content">
    <?= $this->Form->create($likert) ?>
    <fieldset>
        <legend><?= __('Edit Likert') ?></legend>
        <?php
            echo $this->Form->input('review_id', ['options' => $reviews]);
            echo $this->Form->input('review_item');
            echo $this->Form->input('likert_level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
