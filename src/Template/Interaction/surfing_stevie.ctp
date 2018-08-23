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

    Talking to Surfing Stevie
	<div class="panel">
    Surf Man Stevie: Waves are not measured in feet and inches, they are measured in increments of fear.
    Out of the water, I am nothing. There is nothing, nothing, more sad than a surfer who used to surf.
        <br>
        <br>
            <?= $this->Html->image('scene2/bette.gif', ['alt' => 'bette']) ?>
	</div>

        <div class="compass">
        <button type="button" class="btn btn-success" id="betteFormat">
          <?= $this->Html->link(__('Go back'), ['controller' => 'Quest', 'action' => 'wavesUpBeach']) ?>
        </button>
    </div>

    




