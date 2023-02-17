var protekloVrijeme = $("#proteklo-vrijeme").text();
var vrijemeS = parseInt(protekloVrijeme, 10);
var vrijemeM = Math.floor(vrijemeS / 60);
vrijemeS = vrijemeS % 60;

var m0s0 = '';
var m0s1 = '';
var m1s0 = '';
var m1s1 = '';

timer();
var timerStart = setInterval(timer, 1000);

function timer() {

    if (vrijemeS === 60) {
        vrijemeM++;
        vrijemeS = 0;
    }

    m0s0 = "0" + vrijemeM + "m 0" + vrijemeS + "s";
    m0s1 = "0" + vrijemeM + "m " + vrijemeS + "s";
    m1s0 = vrijemeM + "m 0" + vrijemeS + 's';
    m1s1 = vrijemeM + "m " + vrijemeS + "s";

    if (vrijemeM < 10 && vrijemeS < 10) {
        $("#vrijeme-num").html(m0s0);
    }
    else if (vrijemeM < 10 && vrijemeS >= 10) {
        $("#vrijeme-num").html(m0s1);
    }
    else if (vrijemeM >= 10 && vrijemeS < 10) {
        $("#vrijeme-num").html(m1s0);
    }
    else {
        $("#vrijeme-num").html(m1s1);
    }
    
    vrijemeS++;
}

