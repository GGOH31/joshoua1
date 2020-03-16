<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->control('localisation');
            echo $this->Form->control('email1');
            echo $this->Form->control('email2');
            echo $this->Form->control('contact1');
            echo $this->Form->control('contact2');
            echo $this->Form->control('valide');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
