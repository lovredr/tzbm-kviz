// postepeni prikaz pitanja i odgovora i omogucavanje klika
setTimeout(function() { $(".okvir-pitanje-textbox > .hide").css("display", "inline"); }, 500);
setTimeout(function() { $("#a .hide").css("display", "inline"); }, 2000);
setTimeout(function() { $("#b .hide").css("display", "inline"); }, 2500);
setTimeout(function() { $("#c .hide").css("display", "inline"); }, 3000);
setTimeout(function() { $("#d .hide").css("display", "inline"); 
                        $(".okvir-odabir").css("pointer-events", "auto"); }, 3500);

// funkcija na odabir odgovora
function klik(id) {

    $(".okvir-odabir").css("pointer-events", "none");
    $(".okvir-odabir").css("background", "transparent");

    $(`#${id} .okvir-odgovor-textbox`).css("background", "orange");
    $(`#${id} .okvir-odgovor-text`).css("color", "black");
    $(`#${id} .orange`).css("color", "white");
    $(`#${id} .orange`).css("text-shadow", "0 0 0.5vh white");

    $("#konacno-slovo").val(id);
    // delay zato da izgleda malo prirodnije prijelaz iz pitanja u odgovor
    setTimeout(function() { $("#konacan-odgovor").submit(); }, 500);
}