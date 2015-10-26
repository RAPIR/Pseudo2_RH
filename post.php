<!DOCTYPE HTML>
<html>
<head>
    <title>In-ADS komponent</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="http://inaadress.maaamet.ee/inaadress/js/inaadress.min.js"></script>
</head>
<body>

<form action="post.php" method="post">
    <div id="aadressiotsing" style="width: 600px; height: 400px"></div>
    <input type="hidden" id="aadress" name="aadress">
    <button type="submit">Salvesta</button>
</form>

<script>
    var inAadress = new InAadress({
        "mode": "3",
        "container": "aadressiotsing",
        "nocss": false,
        "appartment": 1,
        searchLayers: ["EHITISHOONE"]
    });
    document.addEventListener('addressSelected', function (e) {
        var aadress = e.detail.aadress;
        aadress = aadress.split(", ").reverse().join(", ");
        inAadress.setAddress(aadress);
        document.getElementById("aadress").value = aadress;
    });
</script>

</body>
</html>