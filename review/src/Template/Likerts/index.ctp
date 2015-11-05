<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Likert'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="likerts index large-9 medium-8 columns content">
    <h3><?= __('Likerts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('review_id') ?></th>
                <th><?= $this->Paginator->sort('review_item') ?></th>
                <th><?= $this->Paginator->sort('likert_level') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($likerts as $likert): ?>
            <tr>
                <td><?= $this->Number->format($likert->id) ?></td>
                <td><?= $likert->has('review') ? $this->Html->link($likert->review->id, ['controller' => 'Reviews', 'action' => 'view', $likert->review->id]) : '' ?></td>
                <td><?= h($likert->review_item) ?></td>
                <td><?= h($likert->likert_level) ?></td>
                <td><?= h($likert->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $likert->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $likert->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $likert->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likert->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
