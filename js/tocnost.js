
// prikaz nex botuna
$(".next").delay(1100).fadeIn(300);

// animacija za tocan odnosno krivi odgovor
var konacnoSlovo = $("#konacno-slovo").text();
var tocnoSlovo = $("#tocno-slovo").text();
oznaceno();

if (konacnoSlovo == tocnoSlovo) {
    setTimeout(tocno, 1000);
    setTimeout(oznaceno, 1200);
    setTimeout(tocno, 1400);
}
else {
    setTimeout(tocno, 1000);
    setTimeout(normalno, 1200);
    setTimeout(tocno, 1400);
}

// stop timer
if (parseInt($("#timer-stop").text()) == 10) {
    setTimeout(timerStop, 1100);
}

function timerStop() {
    clearInterval(timerStart);
    $(".timer").css("color", "orange");
}

function oznaceno() {
    $(`#${konacnoSlovo} .okvir-odgovor-textbox`).css("background", "orange");
    $(`#${konacnoSlovo} .okvir-odgovor-text`).css("color", "black");
    $(`#${konacnoSlovo} .orange`).css("color", "white");
    $(`#${konacnoSlovo} .orange`).css("text-shadow", "0 0 0.5vh white");
}

function tocno() {
    $(`#${tocnoSlovo} .okvir-odgovor-textbox`).css("background", "#00cc00");
    $(`#${tocnoSlovo} .okvir-odgovor-text`).css("color", "black");
    $(`#${tocnoSlovo} .orange`).css("color", "white");
    $(`#${tocnoSlovo} .orange`).css("text-shadow", "0 0 0.5vh white");
}

function normalno() {
    $(`#${tocnoSlovo} .okvir-odgovor-textbox`).css("background", "black");
    $(`#${tocnoSlovo} .okvir-odgovor-text`).css("color", "white");
    $(`#${tocnoSlovo} .orange`).css("color", "orange");
    $(`#${tocnoSlovo} .orange`).css("text-shadow", "0 0 1vh orange");
}

 