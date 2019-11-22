<html>
<head type="text/css" media="print">
    <title>Liste des QR Codes</title>
    <style type="text/css">
       @media print
        {
            .noprint {display:none;}
        }
    </style>
</head>

<body>
<?php 

    $fulltext=$_POST['qr_text'];
    $numbers = explode(",", $fulltext);
    echo count(numbers) . " fiches traitées : " . $fulltext;
    echo "<img src=\"../../../../qr$fulltext.png\">"
?>
</body></html>
