var pigScript = [
    "",
    "Quack, I mean OINK",
    "OINK",
    "OINK, heres a gnarly surfboard.",
    ""
];

var playerScript = [
    "Oh look a flying pig.",
    "Say Whaaat",
    "What is this?",
    "Yo chuck needs you.",
    "Thanks talking pig."
];

var pigCounter = 0;
var playerCounter = 0;
var questPoints = 0;


function pageLoad() {
     questPoints = document.getElementById('questPoints').innerHTML;
     console.log(questPoints);
     if(questPoints < 3 ){
        playerCounter = 0;
        pigCounter = 0;
     }
     if(questPoints == 3){
        playerCounter = 3;
        pigCounter = 2;
        document.getElementById("playerText").innerHTML = playerScript[playerCounter];
     }
     /*if(questPoints > 3){
         playerCounter = 4;
         pigCounter = 4;
     }*/
     if(questPoints == 4){
        pigCounter = 3;
        playerCounter = 4;
        document.getElementById("playerText").innerHTML = playerScript[playerCounter];
     }
     if(questPoints > 5){
         pigCounter = 100;
         playerCounter = 100;
     }
}
pageLoad();

function loadScript(){
    if(playerCounter < 3){
        document.getElementById("playerText").innerHTML = playerScript[playerCounter];
    }
    if(playerCounter == 3 && questPoints < 3){
        window.location = '../quest/waves-up-beach';
    }
    if(playerCounter == 4 && questPoints == 3){
        window.location = '../my-islander/quest-up/wavesUpBeach';
        playerCounter = 100; pigCounter = 100;
        document.getElementById("pigText").innerHTML = "";
    }
    /*if(playerCounter == 4 && questPoints > 3){
        window.location = '../quest/waves-up-beach';
    }*/
    if(playerCounter == 5){
        window.location = '../my-islander/quest-up/landOh';
    }
    if(pigCounter >= 0 && pigCounter < 99){
        document.getElementById("pigText").innerHTML = pigScript[pigCounter];
    }
}
loadScript();

document.getElementById('playerText').addEventListener('click', function(){
    playerCounter++
    pigCounter++;
    loadScript();
  });
