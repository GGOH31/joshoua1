<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teame $teame
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teame->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teame->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teames'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="teames form large-9 medium-8 columns content">
    <?= $this->Form->create($teame) ?>
    <fieldset>
        <legend><?= __('Edit Teame') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('poste');
            echo $this->Form->control('avatare_name');
            echo $this->Form->control('avatare_path');
            echo $this->Form->control('valide');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
