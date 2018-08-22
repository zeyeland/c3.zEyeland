

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

 Chapter 1: Land Ohhh 
 
	<div class="panel">
    Welcometh to zEyeland scrubeth
        <?= $this->Html->image('scene3/crossRoads.jpg', ['alt' => 'CakePHP']) ?>
	</div>


    <br><br> 

<div class="compass">
        <button type="button" class="btn btn-success" class="buttonConfig">
              <?= $this->Html->link(__('Continue north down the path'), ['action' => 'crossRoadsContinued']) ?>
        </button>
        <br><br>
        <button type="button" class="btn btn-success">
             <?= $this->Html->link(__('Adventure through left path'), ['action' => 'crossRoadsCaution']) ?>
        </button>
    </div>



