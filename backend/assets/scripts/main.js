//open overlay nav upon clicking closed menu button
function openNav() {
    document.getElementById("menu-overlay").style.display = "block";
}

function closeNav() {
    document.getElementById("menu-overlay").style.display = "none";
}

//open overlay nav upon clicking closed menu button (admin)
function openAdminNav() {
    document.getElementById("admin-menu-overlay").style.display = "block";
}

function closeAdminNav() {
  document.getElementById("admin-menu-overlay").style.display = "none";
}

function rememberLoginMsg(checkboxId, msgId) {
    var checkbox = document.getElementById(checkboxId);
    var message = document.getElementById(msgId);
    
    if(checkbox.checked == true) {
        message.style.visibility = "visible";
    }
    else {
        message.style.visibility = "hidden";
    }
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