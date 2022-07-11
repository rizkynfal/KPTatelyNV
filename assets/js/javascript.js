var inputTime = document.getElementById('inputTime')

function updateTime() {
    var d = new Date();

    inputTime.value = d.toLocaleTimeString();

}

function timeUpdate() {
    var d = new Date();
    document.getElementById('inputTimestamp').value = d.toLocaleTimeString();

}
setInterval(updateTime, 1000);
setInterval(timeUpdate, 1000);