
//open overlay nav
function openNav() {
    document.getElementById("menu-overlay").style.display = "block";
}

//close overlay nav
function closeNav() {
    document.getElementById("menu-overlay").style.display = "none";
}

//open overlay nav (admin menu)
function openAdminNav() {
    document.getElementById("admin-menu-overlay").style.display = "block";
}

//close overlay nav (admin menu)
function closeAdminNav() {
  document.getElementById("admin-menu-overlay").style.display = "none";
}

//reveals a mesage when a checkbox has been checked
function rememberLoginMsg(checkboxId, msgId) {
    var checkbox = document.getElementById(checkboxId),
        message = document.getElementById(msgId);
    
    if(checkbox.checked == true) {
        message.style.visibility = "visible";
    }
    else {
        message.style.visibility = "hidden";
    }
}

//reveals a message when an icon is focused
function nowWatching (iconId, msgId){
    var icon = document.getElementById(iconId),
    message = document.getElementById(msgId);

    if(icon.focus == true) {
        message.style.visibility = "visible";
    }
    else {
        message.style.visibility = "hidden";
    }
}

// for notification preferences, disables and unchecks
// other options if no contact option has been selected
function disableOpt() {
    var dis = document.getElementById("no-contact"),
        en = document.getElementsByName("contact");
    
    if (dis.checked) {
        for (var i = 0; i < 3; i++) {
            en[i].checked = false;
            en[i].disabled = true;
        }
    }
    else {
         for (var i = 0; i < 3; i++) {
            en[i].disabled = false;
            en[i].checked = false;
        }
    }
}

//supply dropdown time picked for calendar events
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

function submitForm() {
    
}

//displays a message when a form has been submitted
function displaySubmitMsg() {
    
}
