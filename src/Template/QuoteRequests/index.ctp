<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quote Request'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['controller' => 'ProviderMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider Message'), ['controller' => 'ProviderMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Request Details'), ['controller' => 'QuoteRequestDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Request Detail'), ['controller' => 'QuoteRequestDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quoteRequests index large-9 medium-8 columns content">
    <h3><?= __('Quote Requests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reply_deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('budget') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quoteRequests as $quoteRequest): ?>
            <tr>
                <td><?= $this->Number->format($quoteRequest->id) ?></td>
                <td><?= $quoteRequest->has('user') ? $this->Html->link($quoteRequest->user->id, ['controller' => 'Users', 'action' => 'view', $quoteRequest->user->id]) : '' ?></td>
                <td><?= h($quoteRequest->genre) ?></td>
                <td><?= h($quoteRequest->name) ?></td>
                <td><?= h($quoteRequest->reply_deadline) ?></td>
                <td><?= h($quoteRequest->delivery_date) ?></td>
                <td><?= $this->Number->format($quoteRequest->budget) ?></td>
                <td><?= h($quoteRequest->deleted) ?></td>
                <td><?= h($quoteRequest->created) ?></td>
                <td><?= h($quoteRequest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quoteRequest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteRequest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequest->id)]) ?>
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
