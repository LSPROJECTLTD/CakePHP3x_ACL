<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patrimonio $patrimonio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Patrimonio'), ['action' => 'edit', $patrimonio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Patrimonio'), ['action' => 'delete', $patrimonio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patrimonio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Patrimonios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patrimonio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="patrimonios view large-9 medium-8 columns content">
    <h3><?= h($patrimonio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($patrimonio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($patrimonio->numero) ?></td>
        </tr>
    </table>
</div>
