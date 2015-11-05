<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Likerts'), ['controller' => 'Likerts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Likert'), ['controller' => 'Likerts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reviews view large-9 medium-8 columns content">
    <h3><?= h($review->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Customer') ?></th>
            <td><?= $review->has('customer') ? $this->Html->link($review->customer->id, ['controller' => 'Customers', 'action' => 'view', $review->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($review->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($review->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($review->modified) ?></tr>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Review') ?></h4>
        <?= $this->Text->autoParagraph(h($review->review)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Likerts') ?></h4>
        <?php if (!empty($review->likerts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Review Id') ?></th>
                <th><?= __('Review Item') ?></th>
                <th><?= __('Likert Level') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($review->likerts as $likerts): ?>
            <tr>
                <td><?= h($likerts->id) ?></td>
                <td><?= h($likerts->review_id) ?></td>
                <td><?= h($likerts->review_item) ?></td>
                <td><?= h($likerts->likert_level) ?></td>
                <td><?= h($likerts->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Likerts', 'action' => 'view', $likerts->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Likerts', 'action' => 'edit', $likerts->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Likerts', 'action' => 'delete', $likerts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $likerts->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
