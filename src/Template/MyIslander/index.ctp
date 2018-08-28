
<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
    <?= $this->Html->image('charSelection/char0.png', ['id' => 'playerIcon','alt' => 'playerIcon']) ?>
      <br>  <table class="vertical-table">		
            <tr>
                <th scope="row"><?= __('Islander:') ?></th>
                <td><?= h($userFocus['islander_name']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Level:') ?></th>
                <td><?= h($userFocus['level']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('QP') ?></th>
                <td><?= h($userFocus['quest_points']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Honor:') ?></th>
                <td><?= h($userFocus['honor']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Purse:') ?></th>
                <td><?= h($userFocus['purse']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Health:') ?></th>
                <td><?= h($userFocus['health']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Spirit') ?></th>
                <td><?= h($userFocus['spirit']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Mind') ?></th>
                <td><?= h($userFocus['mind']) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Body') ?></th>
                <td><?= h($userFocus['body']) ?></td>
            </tr>
        </table>    
	</div>
</div>

<?php
    //logic to display cool phrases instead of spirit mind body level(int) -> string
    echo $this->Html->css('player.css');
    echo $this->Html->script('player.js');
?>
