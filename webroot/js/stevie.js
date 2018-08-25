var stevieScript = [
    "Waves are not measured in feet and inches, they are measured in increments of fear. Out of the water, I am nothing. There is nothing, nothing, more sad than a surfer who used to surf.",
    "My faith is strong duude. There is sage of a legendary surfboard maker. It's not tragic to die doing something you love.",
    "",
    "Thanks duude. Surfs UP!"
];

var playerScript = [
    "Thats deep dude, what's next?",
    "Gnarly dude!",
    "",
    "Dude legend is true. [Give Stevie the gnarly board]"
];

var stevieCounter = 0;
var playerCounter = 0;
var questPoints = 0;

function pageLoad() {
     questPoints = document.getElementById('questPoints').innerHTML;
     console.log(questPoints);
     //stevieCounter = 0;
    //playerCounter = 0;
     if(questPoints > 0){
        document.getElementsByClassName('buttonObjectivesHidden')[0].style.display = "block";
     }
     if(questPoints == 5){
         playerCounter = 3;
         stevieCounter = 3;
         document.getElementById("playerText").innerHTML = playerScript[playerCounter];
         document.getElementById("stevieText").innerHTML = stevieScript[stevieCounter];
     }
     if(questPoints >= 6){
        window.location = '../quest/waves-up-beach';
     }
}
pageLoad();

function loadScript(){
    if(playerCounter < 2){
        document.getElementById("playerText").innerHTML = playerScript[playerCounter];
    }
    if(playerCounter == 2 && questPoints == 1){
        //this should redirect player to next page. Should also add questpoint to player data
        playerCounter = 100; // this stops the method from overclocking and activing other window.location
        window.location = '../my-islander/quest-up/wavesUpBeach';
    }
    if(playerCounter == 2 && ( questPoints == 2 || questPoints == 3 )){
        //this should redirect player to next page.
        window.location = '../quest/waves-up-beach';
    }
    if(playerCounter == 2 && questPoints < 5){
        //this should redirect player to next page. Should also add questpoint to player data
        window.location = '../quest/waves-up-beach';
    }
    if(playerCounter == 4){
        window.location = '../my-islander/quest-up/wavesUpBeach';
    }
    ///
    if(stevieCounter >= 0){
        document.getElementById("stevieText").innerHTML = stevieScript[stevieCounter];
    }
}
loadScript();

////////player clicks button
document.getElementById('playerText').addEventListener('click', function(){
    playerCounter++
    stevieCounter++;
    loadScript();
  });
