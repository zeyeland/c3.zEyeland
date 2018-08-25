var questPoints = document.getElementById('questPoints').innerHTML;
console.log(questPoints);
if(questPoints == 4){
    document.getElementById('mapPic').src = "http://localhost:8765/img/scene3/meetNgreet2.jpg";
    document.getElementById('picButton').style.display = "block";
}

if(questPoints > 4){
    document.getElementById('mapPic').src = "http://localhost:8765/img/scene3/meetNgreet2.jpg";

}

