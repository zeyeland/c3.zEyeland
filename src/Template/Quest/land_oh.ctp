

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
        <?= $this->Html->image('scene3/landOhBeach.jpg', ['alt' => 'CakePHP']) ?>
            <button type="button" class="buttonObjectives">
                Explore crashed ship
            </button>
        <br><br>
        <?= $this->Html->image('scene3/meetNgreet1.jpg', ['alt' => 'CakePHP']) ?>
            <button type="button" class="buttonObjectivesHalf">
                Talk to Hotbird Bette
            </button>
            <button type="button" class="buttonObjectivesHalf">
                Chat w/ Chuck Simpson
            </button>
	</div>


    <br><br>

<div class="compass">
        <button type="button" class="btn btn-success" class="buttonConfig">
              <?= $this->Html->link(__('Explore the west coast'), ['action' => 'wavesUpBeach']) ?>
        </button>
        <br><br>
        <button type="button" class="btn btn-success">
        <?= $this->Html->link(__('Continue down path'), ['action' => 'crossRoads']) ?>
        </button>
    </div>



