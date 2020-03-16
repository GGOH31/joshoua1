<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portfolio $portfolio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $portfolio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $portfolio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Port Types'), ['controller' => 'PortTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Port Type'), ['controller' => 'PortTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portfolios form large-9 medium-8 columns content">
    <?= $this->Form->create($portfolio) ?>
    <fieldset>
        <legend><?= __('Edit Portfolio') ?></legend>
        <?php
            echo $this->Form->control('port_type_id', ['options' => $portTypes]);
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('imagename');
            echo $this->Form->control('imagepath');
            echo $this->Form->control('valide');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
