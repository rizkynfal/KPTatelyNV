</body>
<script type="text/javascript">
    var inputTime = document.getElementById('inputTime')
    var inputTimeStamp = document.getElementById('inputTimeStamp')
    var inputOilCm = document.getElementById('inputOilCmProd')
    var inputOilBbls = document.getElementById('inputOilBblsProd')
    var inputWatercm = document.getElementById('inputWaterCmProd')
    var inputWaterbbl = document.getElementById('inputWaterBblsProd')
   

    function updateTime() {
        var d = new Date();

        inputTime.value = d.toLocaleTimeString();

    }

    function timeUpdate() {
        var d = new Date();
        inputTimeStamp.value = d.toLocaleTimeString();

    }

    function sumOilUpdate() {
        let oilBbls;

        if (inputOilCm.value == "") {
            oilBbls = "0";

        } else {
            oilBbls = parseFloat(inputOilCm.value) * 1.7;

        }
        return inputOilBbls.value = String(oilBbls);

    }

    function sumWaterUpdate() {
        let waterBbls;
        if (inputWatercm.value == "") {
            waterBbls = "0";
        } else {
            waterBbls = parseFloat(inputWatercm.value) * 1.7;
        }
        return inputWaterbbl.value = String(waterBbls);
    }
    setInterval(updateTime, 1000);
    setInterval(sumOilUpdate, 500);
    setInterval(sumWaterUpdate, 500);
    setInterval(timeUpdate, 1000);
</script>