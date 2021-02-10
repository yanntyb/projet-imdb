let showAll = false

$("li").hover(function(){
    $(this).css({
        "cursor" : "pointer"
    })
})

$("#choice").click(function(){
    if(showAll === false){
        showAll = true;
    }
    else{
        showAll = false;
    }
    if(showAll){
        $("#showAllButton").css({
            "display" : "block"
        })
    }
    else{
        $("#showAllButton").css({
            "display" : "none"
        })
    }
})
