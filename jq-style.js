$(document).ready(function() {
 $("a").click(function() { // animuotas pakilimas į puslapio viršų;
    $("#top").animate({ 
    scrollTop: $('html, body').get(0).scrollHeight 
    }, 2000);
});
function blink_text() { //teksto mirksėjimo funkcija
    $('.blink').fadeOut(600);
    $('.blink').fadeIn(600);
    }
    setInterval(blink_text, 1000); // 04 kaip dažnai mirki
});