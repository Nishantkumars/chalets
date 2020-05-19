<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chalet $chalet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chalet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chalet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Chalets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chalets form large-9 medium-8 columns content">
    <?= $this->Form->create($chalet) ?>
    <fieldset>
        <legend><?= __('Edit Chalet') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('week');
            echo $this->Form->control('weekend');
            echo $this->Form->control('weekdays');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
