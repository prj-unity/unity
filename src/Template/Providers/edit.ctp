<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $provider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['controller' => 'ProviderMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider Message'), ['controller' => 'ProviderMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="providers form large-9 medium-8 columns content">
    <?= $this->Form->create($provider) ?>
    <fieldset>
        <legend><?= __('Edit Provider') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('pref');
            echo $this->Form->control('addr_1');
            echo $this->Form->control('addr_2');
            echo $this->Form->control('tel');
            echo $this->Form->control('region');
            echo $this->Form->control('service_type');
            echo $this->Form->control('catchphrase');
            echo $this->Form->control('genre');
            echo $this->Form->control('profile1');
            echo $this->Form->control('profile2');
            echo $this->Form->control('profile3');
            echo $this->Form->control('image1');
            echo $this->Form->control('image2');
            echo $this->Form->control('image3');
            echo $this->Form->control('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
