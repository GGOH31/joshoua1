<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit About'), ['action' => 'edit', $about->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete About'), ['action' => 'delete', $about->id], ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Abouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New About'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abouts view large-9 medium-8 columns content">
    <h3><?= h($about->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image Name') ?></th>
            <td><?= h($about->image_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Path') ?></th>
            <td><?= h($about->image_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video Name') ?></th>
            <td><?= h($about->video_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video Path') ?></th>
            <td><?= h($about->video_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subicone') ?></th>
            <td><?= h($about->subicone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($about->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valide') ?></th>
            <td><?= $this->Number->format($about->valide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($about->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($about->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($about->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subtexte Title') ?></h4>
        <?= $this->Text->autoParagraph(h($about->subtexte_title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subtexte') ?></h4>
        <?= $this->Text->autoParagraph(h($about->subtexte)); ?>
    </div>
</div>
