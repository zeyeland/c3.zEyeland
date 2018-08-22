

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
    The Crossroads (Caution)
 
	<div class="panel">
    Enjoying the scenery, you drift off the path. Wow, whats going on here, you quickly hide behind a tall bush. 
    Looks like you've stumpled into the wrong place wrong time? These guys mean buisness, better
    not interput. These islanders look out of my leauge.
        <?= $this->Html->image('scene3/wrongWay.jpg', ['alt' => 'CakePHP']) ?>
        <br>
        <button type="button"  class="buttonWarning">
              <?= $this->Html->link(__('(WARNING) Lets get out of here before your spotted'), ['action' => 'crossRoads']) ?>
        </button>
	</div>


    <br><br> 

<div class="compass">
        <button type="button" class="btn btn-success" class="buttonConfig">
              <?= $this->Html->link(__('Go back'), ['action' => 'crossRoads']) ?>
        </button>
        <br><br>
    </div>



