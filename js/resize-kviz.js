$(window).resize(function() {
    
    // usko
    if (window.innerWidth < (0.6*(window.innerHeight))) {
        $(".okvir-pitanje").css("width", "90%");
        $(".okvir-odgovor").css("width", "90%");
        $(".timer").css("margin-top", "7vh");
    }
    
    // srednje usko
    else if (window.innerWidth < (1.3*(window.innerHeight))) {
        $(".okvir-pitanje").css("width", "80%");
        $(".okvir-odgovor").css("width", "80%");
        $(".timer").css("margin-top", "4vh");
    }
    
    // srednje siroko
    else if (window.innerWidth < (1.8*(window.innerHeight))) {
        $(".okvir-pitanje").css("width", "calc(80% + 1vh)");
        $(".okvir-odgovor").css("width", "40%");
        $(".timer").css("margin-top", "8vh");
    }
    
    // siroko
    else {
        $(".okvir-pitanje").css("width", "calc(70% + 1vh)");
        $(".okvir-odgovor").css("width", "35%");
        $(".timer").css("margin-top", "8vh");
    }

}).resize();