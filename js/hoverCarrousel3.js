$("#carousel3 .cont").hover(function(){
    document.body.style.cursor="pointer";
    $(this).find(".time").css({
        "color" : "orange"
    })
}).mouseleave(function(){
    document.body.style.cursor="default";
    $(this).find(".time").css({
        "color" : "white"
    })
})