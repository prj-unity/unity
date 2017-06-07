<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Provider Message'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="providerMessages index large-9 medium-8 columns content">
    <h3><?= __('Provider Messages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provider_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quote_request_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('message_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providerMessages as $providerMessage): ?>
            <tr>
                <td><?= $this->Number->format($providerMessage->id) ?></td>
                <td><?= $providerMessage->has('user') ? $this->Html->link($providerMessage->user->id, ['controller' => 'Users', 'action' => 'view', $providerMessage->user->id]) : '' ?></td>
                <td><?= $providerMessage->has('provider') ? $this->Html->link($providerMessage->provider->id, ['controller' => 'Providers', 'action' => 'view', $providerMessage->provider->id]) : '' ?></td>
                <td><?= $providerMessage->has('quote_request') ? $this->Html->link($providerMessage->quote_request->name, ['controller' => 'QuoteRequests', 'action' => 'view', $providerMessage->quote_request->id]) : '' ?></td>
                <td><?= $this->Number->format($providerMessage->message_id) ?></td>
                <td><?= h($providerMessage->deleted) ?></td>
                <td><?= h($providerMessage->created) ?></td>
                <td><?= h($providerMessage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $providerMessage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $providerMessage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $providerMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $providerMessage->id)]) ?>
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
