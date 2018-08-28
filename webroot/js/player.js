
var characterImage = document.getElementById('playerIcon');

var x = Math.floor((Math.random() * 10) );
console.log(x);
switch (x) {
    case 0:
        characterImage.src = "http://localhost:8765/img/charSelection/char0.png"
        break;
    case 1:
        characterImage.src = "http://localhost:8765/img/charSelection/char1.png"
        break;
    case 2:
        characterImage.src = "http://localhost:8765/img/charSelection/char2.png"
        break;
    case 3:
        characterImage.src = "http://localhost:8765/img/charSelection/char3.png"
        break;
    case 4:
        characterImage.src = "http://localhost:8765/img/charSelection/char4.png"
        break;
    case 5:
        characterImage.src = "http://localhost:8765/img/charSelection/char5.png"
        break;
    case 6:
        characterImage.src = "http://localhost:8765/img/charSelection/char6.png"
        break;
    case 7:
        characterImage.src = "http://localhost:8765/img/charSelection/char7.png"
        break;
    case 8:
        characterImage.src = "http://localhost:8765/img/charSelection/char8.png"
        break;
    case 9:
        characterImage.src = "http://localhost:8765/img/charSelection/char9.png"
        break;
    case 10:
        characterImage.src = "http://localhost:8765/img/charSelection/char10.png"
        break;
}