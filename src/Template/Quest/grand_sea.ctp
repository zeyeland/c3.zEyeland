<?php
    //logic to display cool phrases instead of spirit mind body level(int) -> string
    //<div class="index large-5 medium-5 large-offset-4 medium-offset-4 columns">
    echo $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    echo $this->Html->script('https://code.jquery.com/jquery-3.3.1.slim.min.js');
    echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    echo $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

?>
<br>

 Page 2
    <div class="panel">
    As an eyeland'r thee floateth, drifting one with the ocean.  Landeth hoooo far off in the distance.  I spy with mine own eye an island within the distance.  
    Landeth hooo, the plank drifts clos'r to the starteth of thy journey.  zeyeland awaits thy arrival. <br><br>
    You open your eyes to find yourself drifting a sea. One does'nt recall what has landed self in this situation. You spot land in the near distance.
    Your heart pumps expeditously from the uncertainty of what this island has in store. Land hooo, your inner self mumbles. Land hooooo.
	</div>

<div class="index large-8 medium-8 large-offset-2 medium-offset-2 columns">
    Page 1
	<div class="panel">
        <?= $this->Html->image('scene2/byTheKraken.jpeg', ['alt' => 'CakePHP']) ?>
        <?= $this->Html->image('scene2/cavern.gif', ['alt' => 'CakePHP']) ?>
        <?= $this->Html->image('scene2/islandFromFar.jpg', ['alt' => 'CakePHP']) ?>
	</div>

</div>

    <br><br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br><br>
    <button type="button" class="btn btn-success">
    <?= $this->Html->link(__('Continue - Page 3: Land Oh'), ['action' => 'landOh']) ?>
    </button>




