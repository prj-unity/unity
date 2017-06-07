<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Provider'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['controller' => 'ProviderMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider Message'), ['controller' => 'ProviderMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="providers index large-9 medium-8 columns content">
    <h3><?= __('Providers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('addr_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('addr_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catchphrase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $provider): ?>
            <tr>
                <td><?= $this->Number->format($provider->id) ?></td>
                <td><?= h($provider->username) ?></td>
                <td><?= h($provider->password) ?></td>
                <td><?= $this->Number->format($provider->pref) ?></td>
                <td><?= h($provider->addr_1) ?></td>
                <td><?= h($provider->addr_2) ?></td>
                <td><?= h($provider->tel) ?></td>
                <td><?= h($provider->region) ?></td>
                <td><?= h($provider->service_type) ?></td>
                <td><?= h($provider->catchphrase) ?></td>
                <td><?= h($provider->genre) ?></td>
                <td><?= h($provider->deleted) ?></td>
                <td><?= h($provider->created) ?></td>
                <td><?= h($provider->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $provider->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provider->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?>
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
