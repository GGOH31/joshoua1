<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $about->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Abouts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="abouts form large-9 medium-8 columns content">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Edit About') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('image_name');
            echo $this->Form->control('image_path');
            echo $this->Form->control('video_name');
            echo $this->Form->control('video_path');
            echo $this->Form->control('subtexte_title');
            echo $this->Form->control('subtexte');
            echo $this->Form->control('subicone');
            echo $this->Form->control('valide');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
