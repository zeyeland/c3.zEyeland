var questPoints = document.getElementById('questPoints').innerHTML;
console.log(questPoints);

if(questPoints >= 4){
    document.getElementById('beachPic').src = "http://localhost:8765/img/scene3/wavesUp.jpg";
    document.getElementById('buttonOne').style.display = 'none';
}

if(questPoints >= 6){
    document.getElementById('stevieBtn').style.display = 'none';
    document.getElementById('steviePic').src = "http://localhost:8765/img/scene3/wavesUp2.jpg";
}
