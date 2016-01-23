$(document).ready(function() {
    var $menu = $('.nav-collapse'),
    $menulink = $('.nav-icon');
    
    $menulink.click(function(){
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        return false;
    });
});

var quotes=[
    "HTML5",
    "CSS3",
    "JavaScript",
    "jQuery",
];

var i=0;

setInterval(function() {
    $("#textslider").html(quotes[i]);
    if (i==quotes.length)
        i=0;
    else
        i++;
}, 1*1000);

// Adding resized textarea in the form

function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

