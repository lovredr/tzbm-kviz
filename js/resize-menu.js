$(window).resize(function() {
    
    // usko
    if (window.innerWidth < (0.8*(window.innerHeight))) {
        $(".okvir-glow").css("width", "90%");
    }
    
    // srednje usko
    else if (window.innerWidth < (1.4*(window.innerHeight))) {
        $(".okvir-glow").css("width", "80%");
    }
    
    // srednje siroko
    else if (window.innerWidth < (1.8*(window.innerHeight))) {
        $(".okvir-glow").css("width", "70%");
    }
    
    // siroko
    else {
        $(".okvir-glow").css("width", "60%");
    }

}).resize();