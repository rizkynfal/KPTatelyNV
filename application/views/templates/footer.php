</body>
<script type="text/javascript">
    var inputTime = document.getElementById('inputTime')
    var inputTimeStamp = document.getElementById('inputTimeStamp')
   

    function updateTime() {
        var d = new Date();

        inputTime.value = d.toLocaleTimeString();

    }

    function timeUpdate() {
        var d = new Date();
        inputTimeStamp.value = d.toLocaleTimeString();

    }
    setInterval(updateTime, 1000);
    setInterval(timeUpdate, 1000);
</script>