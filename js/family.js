var cnt = 0;

function _row2() {
    try {
        $(".hide2").css("display", "table-row");
    }
    catch(e) {}
}
function _row3() {
    try {
        $(".hide3").css("display", "table-row");
    }
    catch(e) {}
}
function _row4() {
    try {
        $(".hide4").css("display", "table-row");
    }
    catch(e) {}
}
function _row5() {
    try {
        $(".hide5").css("display", "table-row");
    }
    catch(e) {}
}
function _row6() {
    try {
        $(".hide6").css("display", "table-row");
    }
    catch(e) {}
}
function _row7() {
    try {
        $(".hide7").css("display", "table-row");
    }
    catch(e) {}
}
function _row8() {
    try {
        $(".hide8").css("display", "table-row");
    }
    catch(e) {}
}

$(document).ready(function() {

    $("#btn").click(function() {
        cnt++;
        if(cnt == 1){
            $(".hide2").slideDown(300, _row2());
        }else if(cnt == 2){
            $(".hide3").slideDown(300, _row3()); 
        }else if(cnt == 3){
            $(".hide4").slideDown(300, _row4()); 
        }else if(cnt == 4){
            $(".hide5").slideDown(300, _row5()); 
        }else if(cnt == 5){
            $(".hide6").slideDown(300, _row6()); 
        }else if(cnt == 6){
        $(".hide7").slideDown(300, _row7()); 
        }else if(cnt == 7){
        $(".hide8").slideDown(300, _row8()); 
    }
    });    

});