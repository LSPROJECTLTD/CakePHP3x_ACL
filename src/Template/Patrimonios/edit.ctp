<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patrimonio $patrimonio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $patrimonio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $patrimonio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Patrimonios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="patrimonios form large-9 medium-8 columns content">
    <?= $this->Form->create($patrimonio) ?>
    <fieldset>
        <legend><?= __('Edit Patrimonio') ?></legend>
        <?php
            echo $this->Form->control('numero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
