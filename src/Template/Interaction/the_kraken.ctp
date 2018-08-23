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

    Belly of The Mighty Kraken
	<div class="panel">
   ReALly!!! How lief thee stepeth up to the kraken while one is not w'rthy off. 
    Your life flashes before your eyes before The Kraken swollows the srub whole. Didnt 
    even get a chance to blink.
        <br>
        <br>
            <?= $this->Html->image('scene2/eyeDarkness.gif', ['alt' => 'krakenbelly']) ?>
	</div>

        <div class="compass">
        <button type="button" class="btn btn-success">
          <?= $this->Html->link(__('[START OVER] You Died'), ['controller' => 'Quest', 'action' => 'bigBang']) ?>
        </button>
    </div>

    




