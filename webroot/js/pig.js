var pigScript = [
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
    "Where is that pig again...(head back)"
];

var pigCounter = 0;
var playerCounter = 0;
var questPoints = 0;

function pageLoad() {
     questPoints = document.getElementById('questPoints').innerHTML;
     console.log(questPoints);
     if(questPoints > 1 && questPoints < 4){
        pigCounter = 3;
        playerCounter = 3;
     }
}
pageLoad();