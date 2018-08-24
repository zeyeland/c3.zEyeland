<?php
    //logic to display cool phrases instead of spirit mind body level(int) -> string
    //<div class="index large-5 medium-5 large-offset-4 medium-offset-4 columns">
    echo $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    echo $this->Html->css('play.css');
    echo $this->Html->script('https://code.jquery.com/jquery-3.3.1.slim.min.js');
    echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    echo $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

?>
<br>

    Talking to Hotbird Bette
	<div class="panel">
    Ms Hotbird: Awe boys are such LOosERS. Like theres this guy and he cant even surf. What a lame~ooo
    but atleast he doesn't smell like you do NeRddddD.
        <br>
        <br>
            <?= $this->Html->image('scene3/char/bette.png', ['class' => 'imgBette', 'alt' => 'bette']) ?>
	</div>

        <div class="compass">
        <button type="button" class="btn btn-success" id="betteFormat">
          <?= $this->Html->link(__('She 99 Problems so you walked away'), ['controller' => 'Quest', 'action' => 'landOh']) ?>
        </button>
    </div>






