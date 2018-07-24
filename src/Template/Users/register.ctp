<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
<div class="panel">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Register Islander') ?></legend>
        <?php
            echo $this->Form->control('islander_name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('islander_focus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>


<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
<?php
    echo $this->Html->image('cake.logo.png', ['alt' => 'CakePHP']);
    
    echo(1);
?>
</div>


