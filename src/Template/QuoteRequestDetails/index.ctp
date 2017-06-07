<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quote Request Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quoteRequestDetails index large-9 medium-8 columns content">
    <h3><?= __('Quote Request Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quote_request_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quoteRequestDetails as $quoteRequestDetail): ?>
            <tr>
                <td><?= $this->Number->format($quoteRequestDetail->id) ?></td>
                <td><?= $quoteRequestDetail->has('user') ? $this->Html->link($quoteRequestDetail->user->id, ['controller' => 'Users', 'action' => 'view', $quoteRequestDetail->user->id]) : '' ?></td>
                <td><?= $quoteRequestDetail->has('quote_request') ? $this->Html->link($quoteRequestDetail->quote_request->name, ['controller' => 'QuoteRequests', 'action' => 'view', $quoteRequestDetail->quote_request->id]) : '' ?></td>
                <td><?= h($quoteRequestDetail->deleted) ?></td>
                <td><?= h($quoteRequestDetail->created) ?></td>
                <td><?= h($quoteRequestDetail->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quoteRequestDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteRequestDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteRequestDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequestDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
