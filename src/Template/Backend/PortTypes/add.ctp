<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PortType $portType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Port Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($portType) ?>
    <fieldset>
        <legend><?= __('Add Port Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('decription');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
