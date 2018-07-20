<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('islander_name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
       /*     echo $this->Form->control('body');
            echo $this->Form->control('mind');
            echo $this->Form->control('spirit');
            echo $this->Form->control('level');
            echo $this->Form->control('exp');
            echo $this->Form->control('purse');
            echo $this->Form->control('honor');
            echo $this->Form->control('health');   */
            echo $this->Form->control('islander_focus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
