<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Likert'), ['action' => 'edit', $likert->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Likert'), ['action' => 'delete', $likert->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likert->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Likerts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likert'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="likerts view large-9 medium-8 columns content">
    <h3><?= h($likert->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Review') ?></th>
            <td><?= $likert->has('review') ? $this->Html->link($likert->review->id, ['controller' => 'Reviews', 'action' => 'view', $likert->review->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Review Item') ?></th>
            <td><?= h($likert->review_item) ?></td>
        </tr>
        <tr>
            <th><?= __('Likert Level') ?></th>
            <td><?= h($likert->likert_level) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($likert->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($likert->created) ?></tr>
        </tr>
    </table>
</div>
