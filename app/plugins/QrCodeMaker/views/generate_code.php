<html>
<head type="text/css" media="print">
    <title>Liste des QR Codes</title>

<script> 
        function printDiv() { 
            var divContents = document.getElementById("toPrint").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write(divContents); 
            a.document.write('</html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 

</head>

<body>
<?php 
    $fulltext=$_POST['qr_text'];
    $numbers = explode(",", $fulltext);
    echo count($numbers) . " fiches traitées : " . $fulltext . "<br>";
    echo "<button onClick=\"printDiv()\">Imprimer les QR Codes</button>";

    echo "<div id=\"toPrint\">";
    for ($i = 0; $i < count($numbers); $i=$i+1) {
        $number = $numbers[$i];
        echo "<center><h1>Numéro : $number </h1>";
        echo "<img src=\"../../../../app/plugins/QrCodeMaker/views/qrcodes/qr$number.png\"><hr></center> <br>";
}
    echo "</div>";


?>

</body></html>
