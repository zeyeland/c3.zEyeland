var chuckScript = [
    "Hi names chuck... Chuck Simpson. Welcome to zEyeland, Land Oh Land Ohhh.",
    "Scoop out the area and meet some locals. Come talk to me later.",
    "",
    "Welcome to zEyeland",
    "Swine the Legendary Pig, he's great at bluilding boards. Go find and bring him here."
];

var playerScript = [
    "Wazz up its the new islander in town.",
    "Ok",
    "",
    "Hi Stevie needs a surfboard. Oh I saw a flying pig.",
    "Where is that pig again..."
];

var chuckCounter = 0;
var playerCounter = 0;
var questPoints = 0;

/*function pageLoad() {
     questPoints = document.getElemntById('questpoints').innerHTML;
     if(questPoints > 0){
        chuckCounter = 3;
        playerCounter = 3;
     }
}*/
//pageLoad();
function loadScript(){
    if(playerCounter < 2){
        document.getElementById("playerText").innerHTML = playerScript[playerCounter];
    }
    if(playerCounter == 2 && questPoints == 0){
        //this should redirect player to next page. Should also add questpoint to player data
        alert("this should activate");
    }
    if(playerCounter > 2 && playerCounter < 5){
        document.getElementById("playerText").innerHTML = playerScript[playerCounter];
    }
    if(playerCounter == 5 && questPoints == 1){
        //this should redirect player to next page. Should also add questpoint to player data
        alert("this should activate");

    }
    ///
    if(chuckCounter >= 0){
        document.getElementById("chuckText").innerHTML = chuckScript[chuckCounter];
    }
}
loadScript();

////////player clicks button
document.getElementById('playerText').addEventListener('click', function(){
    playerCounter++
    chuckCounter++;
    loadScript();
  });
