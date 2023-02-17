
$("#ime").focus();

// gg
if ($("#gg").text() == 'GG')
{
    $("#gg").css("display", "block");
    $(".okvir-glow").css("animation", "glow-gold 2s ease-in-out infinite alternate");
    $("h1").css("margin-bottom", "4vh");
}

// toast validation i iskljucit default browser pop up 
document.addEventListener('invalid', (function () {
    return function (e) {
        e.preventDefault();
        $("#toast").fadeIn();
        setTimeout(function() { $("#toast").fadeOut(); }, 5000);
        $("#ime").focus();
    };
})(), true);

