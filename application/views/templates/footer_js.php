</body>

<script type="text/javascript">
    setInterval(updateTime, 1000);

    function updateTime() {
        var d = new Date();
        document.getElementById('inputTime').value = d.toLocaleTimeString();

    }
    $(function() {

    });
</script>