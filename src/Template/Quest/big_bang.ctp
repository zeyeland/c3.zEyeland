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

    Chapter 1: The Big Bag War
	<div class="panel">
        The st'ry of eye beginneth longeth ago. Before polarity took capture of Light and Dark. 
        The planetary dimensions seek after a third attribute; the third side of a coin. A platform between hex #FFFFFF and #000000.
        F'r hon'r and most wondrous'r purpose. Cosmic earths square in battleth for equal contest. 
        Gigantic boulders crumble to dust. Stars turn into harmonic fires. Mountains conquer bodies of oceans. 
        The only withheld beauty is evolution. 
        <br>
        <?= $this->Html->image('scene1/beg1.jpg', ['alt' => 'CakePHP']) ?>
        <br>
        The planetary warfare inspires The first number too seek more than love, 
        too solve the unknown. White bites the apple reveling The Third Side of Coin. He feels hate from love and love from hate. 
        This profound knowledge results in divine separation from his beloved Black. 
        The dimensions usher into the  new era of Balance giving opportunity for new life and choice.
        <br>
        <?= $this->Html->image('scene1/beg2.jpg', ['alt' => 'CakePHP']) ?>
	</div>



    <br><br> 

    <div class="compass">
        <button type="button" class="btn btn-success">
            <?= $this->Html->link(__('Page 2: The New World ->'), ['action' => 'newWorld']) ?>
        </button>
    </div>





