<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Provider'), ['action' => 'edit', $provider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Provider'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['controller' => 'ProviderMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider Message'), ['controller' => 'ProviderMessages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="providers view large-9 medium-8 columns content">
    <h3><?= h($provider->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($provider->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($provider->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addr 1') ?></th>
            <td><?= h($provider->addr_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addr 2') ?></th>
            <td><?= h($provider->addr_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($provider->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($provider->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Type') ?></th>
            <td><?= h($provider->service_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catchphrase') ?></th>
            <td><?= h($provider->catchphrase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($provider->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($provider->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pref') ?></th>
            <td><?= $this->Number->format($provider->pref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($provider->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($provider->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $provider->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Profile1') ?></h4>
        <?= $this->Text->autoParagraph(h($provider->profile1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Profile2') ?></h4>
        <?= $this->Text->autoParagraph(h($provider->profile2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Profile3') ?></h4>
        <?= $this->Text->autoParagraph(h($provider->profile3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image1') ?></h4>
        <?= $this->Text->autoParagraph(h($provider->image1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image2') ?></h4>
        <?= $this->Text->autoParagraph(h($provider->image2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image3') ?></h4>
        <?= $this->Text->autoParagraph(h($provider->image3)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Provider Messages') ?></h4>
        <?php if (!empty($provider->provider_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($provider->provider_messages as $providerMessages): ?>
            <tr>
                <td><?= h($providerMessages->id) ?></td>
                <td><?= h($providerMessages->user_id) ?></td>
                <td><?= h($providerMessages->provider_id) ?></td>
                <td><?= h($providerMessages->quote_request_id) ?></td>
                <td><?= h($providerMessages->message_id) ?></td>
                <td><?= h($providerMessages->message) ?></td>
                <td><?= h($providerMessages->deleted) ?></td>
                <td><?= h($providerMessages->created) ?></td>
                <td><?= h($providerMessages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProviderMessages', 'action' => 'view', $providerMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProviderMessages', 'action' => 'edit', $providerMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProviderMessages', 'action' => 'delete', $providerMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $providerMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quotations') ?></h4>
        <?php if (!empty($provider->quotations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Contents') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($provider->quotations as $quotations): ?>
            <tr>
                <td><?= h($quotations->id) ?></td>
                <td><?= h($quotations->user_id) ?></td>
                <td><?= h($quotations->provider_id) ?></td>
                <td><?= h($quotations->quote_request_id) ?></td>
                <td><?= h($quotations->contents) ?></td>
                <td><?= h($quotations->deleted) ?></td>
                <td><?= h($quotations->created) ?></td>
                <td><?= h($quotations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Quotations', 'action' => 'view', $quotations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Quotations', 'action' => 'edit', $quotations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quotations', 'action' => 'delete', $quotations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Messages') ?></h4>
        <?php if (!empty($provider->user_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($provider->user_messages as $userMessages): ?>
            <tr>
                <td><?= h($userMessages->id) ?></td>
                <td><?= h($userMessages->user_id) ?></td>
                <td><?= h($userMessages->provider_id) ?></td>
                <td><?= h($userMessages->quote_request_id) ?></td>
                <td><?= h($userMessages->message_id) ?></td>
                <td><?= h($userMessages->message) ?></td>
                <td><?= h($userMessages->deleted) ?></td>
                <td><?= h($userMessages->created) ?></td>
                <td><?= h($userMessages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserMessages', 'action' => 'view', $userMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserMessages', 'action' => 'edit', $userMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserMessages', 'action' => 'delete', $userMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
