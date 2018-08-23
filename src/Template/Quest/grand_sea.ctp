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

    Chapter 1: The Grand Sea
	<div class="panel">
        You awake aboard a raft drifting throughout a canal. There is no turning back. Look forward to what's ahead. 
        Head north through the cavern and leave your vague memories behind. The massive Kraken blocks the path behind and awaits conflict. Wait what, how did you get pass the Kraken?
        <br>
        <br>
            <?= $this->Html->image('scene2/byTheKraken.jpeg', ['alt' => 'CakePHP']) ?>
        <br>
            <button type="button" class="buttonObjectives">
                <?= $this->Html->link(__('Stare into its eyes of the Kraken and mug.'), ['controller' => 'Interaction', 'action' => 'theKraken']) ?>
            </button>
        <br>
        <br>
        <?= $this->Html->image('scene2/cavern.gif', ['alt' => 'CakePHP']) ?>
         <br>  
          <button type="button" class="buttonObjectives">
                Look around the cavern.
            </button>
            
        <br>
        <br>
        As an eyeland'r thee floateth, drifting one with the ocean.  Landeth hoooo far off in the distance.  I spy with mine own eye an island within the distance.  
        Landeth hooo, the plank drifts clos'r to the starteth of thy journey.  zeyeland awaits thy arrival. 
        <br>
        You open your eyes to find yourself drifting a sea. One does'nt recall what has landed self in this situation. You spot land in the near distance.
        Your heart pumps expeditously from the uncertainty of what this island has in store. Land hooo, your inner self mumbles. Land hooooo.
        <br>
        <br>
        <?= $this->Html->image('scene2/islandFromFar.jpg', ['alt' => 'CakePHP']) ?>
	</div>

        <div class="compass">
        <button type="button" class="btn btn-success">
          <?= $this->Html->link(__('Continue Page 4: Land Oh'), ['action' => 'landOh']) ?>
        </button>
    </div>

    




