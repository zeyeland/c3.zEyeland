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
    Chapter 1: The New World
	<div class="panel">
    Ying: Sugar Spice and Everything nice. These are the ingresdiants to make the ultimate boys of TRowdyruff<br>
        Yang: Quit done~keying you zurg. This isn't Poderpuff girls. Too infinity and beyond<br>
        Ying: Hold on, my toe is still in it.<br>

        <?= $this->Html->image('scene1/beg3.jpg', ['alt' => 'CakePHP']) ?>
        <br>
        Only timeth can bid what is in st're f'r future. Shall thee decideth thy faith or
        marith in the purity of hon'r. Prehaps shalt seeketh spiritual prosp'rity and its assets of gold.
        Eith'r way the kracken shall representeth prejudgment and setteth t off liketh a movie.
        That gent holds t down liketh texas summ'r. [English Translation - The Kracken be putting in work]
        Welcometh to zEyeland scrubeth<br>
        <?= $this->Html->image('scene1/beg4.jpg', ['alt' => 'CakePHP']) ?>
	</div>



    <br><br>


        <div class="compass">
        <button type="button" class="btn btn-success">
        <?= $this->Html->link(__('Continue: Grand Sea ->'), ['action' => 'grandSea']) ?>
        </button>
    </div>





