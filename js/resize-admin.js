$(window).resize(function() {
    
    // usko
    if (window.innerWidth < (0.6*(window.innerHeight))) {
        $("table").css("width", "90%");
        $("#modal").css({"width" : "95%",
                         "height" : "70%",
                         "left" : "2.5%"});
    }
    
    // srednje usko
    else if (window.innerWidth < (1.3*(window.innerHeight))) {
        $("table").css("width", "80%");
        $("#modal").css({"width" : "90%",
                         "height" : "80%",
                         "left" : "5%"});
    }
    
    // srednje siroko
    else if (window.innerWidth < (1.8*(window.innerHeight))) {
        $("table").css("width", "70%");
        $("#modal").css({"width" : "70%",
                         "height" : "80%",
                         "left" : "15%"});
    }
    
    // siroko
    else {
        $("table").css("width", "60%");
        $("#modal").css({"width" : "60%",
                         "height" : "80%",
                         "left" : "20%"});
    }

}).resize();