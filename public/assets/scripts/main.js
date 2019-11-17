//open overlay nav upon clicking closed menu button
function openNav() {
    document.getElementById("menu-overlay").style.display = "block";
}

function closeNav() {
  document.getElementById("menu-overlay").style.display = "none";
}

$(document).ready(function(){
    $('input.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '7:00',
        maxTime: '10:00pm',
        defaultTime: '12:00',
        startTime: '7:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
});