        // Go to Top
    $(window).on("scroll", function () {
        // If window scroll down .active class will added to go-top
        var goTop = $(".back-to-top");
        if ($(window).scrollTop() >= 200) {
            goTop.addClass("active");
        } else {
            goTop.removeClass("active")
        }
    })
    $(".go-top").on("click", function (e) {
        $("html, body").animate({
            scrollTop: 0,
        }, 0);
    });


// -------------------------------------------------------------------------------------------
$(document).ready(function(){
    $("#cricket").click(function(){
        $("#cricket-item").show();
        $("#casino-item").hide(); 
        $("#table-game-item").hide(); 
    });
    $("#casino").click(function(){
        $("#casino-item").show();
        $("#cricket-item").hide(); 
        $("#table-game-item").hide(); 
    });
    $("#table-game").click(function(){
        $("#table-game-item").show();
        $("#cricket-item").hide(); 
        $("#casino-item").hide(); 
    });
});
