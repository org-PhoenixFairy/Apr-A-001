<?php 
# create short variable names
$tireqty = $_POST[ 'tireqty'];
$oilqty = $_POST[ 'oilqty'];
$sparkqty = $_POST[ 'sparkqty'];
?>
<html>
<head>
<title>Bob 's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob 's Auto Parts</h1>
<h2>Order Results</h2>
<?php 
    #������ܽ��
    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;//���������
    define('TIREPRICE', 100);#���峣��--�۸�
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);
    
    echo "<p>Order processed at ";
    echo date('H:i ,jS F Y');
    echo "</p>";//��������
    
    echo "Items ordered: ".$totalqty."<br />";
    $totalamount = 0.00;//
    
    $totalamount = $tireqty * TIREPRICE
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;//������ܽ��
    
    
    $taxrate = 0.10;// local sales tax is 10%     ����˰�� = 10%��        
    echo "Subtotal: $".number_format($totalamount,2)."<br />";
    $totalamount = $totalamount * (1 + $taxrate);
    echo "Total including tax : $".number_format($totalamount,2)."<br />";   
?>
</body>
</html>