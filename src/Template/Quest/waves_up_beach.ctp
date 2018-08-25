

<br>
<span id="questPoints" style="display:none">
    <?= h($userQuestPoints) ?>
</span>
Wave Up Beach
	<div class="panel">
    Just a typical beautiful day here on zEyeland
        <?= $this->Html->image('scene3/wavesUp0.jpg', ['id' => 'beachPic', 'alt' => 'CakePHP']) ?>
        <button type="button" id="buttonOne" class="buttonObjectives">
                <?= $this->Html->link(__('Approach the flying pig'), ['controller' => 'Interaction', 'action' => 'flyingPig']) ?>
            </button>
        <br>
        Surfs up dUDe!
        <?= $this->Html->image('scene3/wavesUp1.jpg', ['id' => 'steviePic','alt' => 'CakePHP']) ?>
            <button type="button" class="buttonObjectives" id="stevieBtn">
                <?= $this->Html->link(__('Talk to Surf Man Stevie'), ['controller' => 'Interaction', 'action' => 'surfingStevie']) ?>
            </button>
	</div>


    <br><br>
    <div class="compass">
        <button type="button" class="btn btn-success">
              <?= $this->Html->link(__('Back to Land Oh Beach'), ['action' => 'landOh']) ?>
        </button>
    </div>

<?php
    //logic to display cool phrases instead of spirit mind body level(int) -> string
    //<div class="index large-5 medium-5 large-offset-4 medium-offset-4 columns">
    echo $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    echo $this->Html->css('play.css');
    echo $this->Html->script('wavesupbeach.js');
    echo $this->Html->script('https://code.jquery.com/jquery-3.3.1.slim.min.js');
    echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    echo $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

?>



