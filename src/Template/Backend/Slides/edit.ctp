<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slide $slide
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $slide->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="slides form large-9 medium-8 columns content">
    <?= $this->Form->create($slide) ?>
    <fieldset>
        <legend><?= __('Edit Slide') ?></legend>
        <?php
            echo $this->Form->control('image_name');
            echo $this->Form->control('image_path');
            echo $this->Form->control('description_texte');
            echo $this->Form->control('valide');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
