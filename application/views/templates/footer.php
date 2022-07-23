</body>
<script type="text/javascript">
    setInterval(updateTime, 1000);
    setInterval(sumOilUpdate, 500);
    setInterval(sumWaterUpdate, 500);
    setInterval(timeUpdate, 1000);
    var inputTime = document.getElementById('inputTime')
    var inputTimeStamp = document.getElementById('inputTimeStamp')
    var inputOilCm = document.getElementById('inputOilCmProd')
    var inputOilBbls = document.getElementById('inputOilBblsProd')
    var inputWatercm = document.getElementById('inputWaterCmProd')
    var inputWaterbbl = document.getElementById('inputWaterBblsProd')
    var namaTank = document.getElementById('namaTank')
    var labelBudi = document.getElementById('labelBudi')
    var selectbudi = document.getElementsById('selectBudi')
    var sebelum = document.getElementById('oilCmsebelum')


    function updateTime() {
        var d = new Date();

        inputTime.value = d.toLocaleTimeString();

    }

    function timeUpdate() {
        var d = new Date();
        inputTimeStamp.value = d.toLocaleTimeString();

    }

    function showBudi() {
        labelBudi.style.visibility = 'visible';
        selectBudi.style.visibility = 'visible';
    }

    function hideBudi() {
        labelBudi.style.visibility = 'hidden';
        selectBudi.style.visibility = 'hidden';

    }

    function budiSelectHandler(namaTank) {
        if (namaTank.value == 'Tank A' || namaTank.value == 'Tank B') {
            sebelum.style.display = 'none'


        } else {
            hideBudi();
        }
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
</script>