<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('List Users'), ['action' => 'index'])?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?=$this->Form->create($user)?>
    <fieldset>
        <legend><?=__('Add User')?></legend>
        <?php
echo $this->Form->control('username');
echo $this->Form->control('password');
echo $this->Form->control('role');
?>
    </fieldset>
    <?=$this->Form->button(__('Submit'))?>
    <?=$this->Form->end()?>
</div>

        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Iconic field
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label>Left Icon</label>
                                <div class="iconic-input">
                                    <i class="fa fa-home"></i>
                                    <input type="text" class="form-control" placeholder="left icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Right Icon</label>
                                <div class="iconic-input right">
                                    <i class="fa fa-book"></i>
                                    <input type="text" class="form-control" placeholder="left icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Input with Loading</label>
                                <input type="text" class="form-control spinner" placeholder="Something Processing">
                            </div>

                        </form>

                    </div>
                </section>
            </div>