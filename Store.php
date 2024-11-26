<?php
    $quantity=$_POST["quantity"];
    $quantity2=$_POST["quantity2"];
    $quantity3=$_POST["quantity3"];
    $quantity4=$_POST["quantity4"];
    $quantity5=$_POST["quantity5"];
    $quantity6=$_POST["quantity6"];
    $quantity7=$_POST["quantity7"];
    $quantity8=$_POST["quantity8"];
    $total=null;
    $net_total=null;
    echo "Here are the list of tems that you have ordered:<br>";
    echo "Rice quantity:",$quantity,"<br>";
    echo "Pillsbuary atta quantity:",$quantity2,"<br>";
    echo "Aashirvaad atta quantity:",$quantity3,"<br>";
    echo "Toor dal quantity:",$quantity4,"<br>";
    echo "Idly ravva quantity:",$quantity5,"<br>";
    echo "Almonds quantity:",$quantity6,"<br>";
    echo "Drygrapes quantity:",$quantity7,"<br>";
    echo "Cashewnuts quantity:",$quantity8,"<br>";
    $total=65*$quantity+60*$quantity2+60*$quantity3+170*$quantity4+50*$quantity5+400*$quantity6+400*$quantity7+400*$quantity8;
    echo "The Total is:";
    echo $total;
    $net_total=$total-($total/10);
    echo "<br>";
    echo "Discount=10%<br>";
    echo "The net amount:";
    echo $net_total;
?>