<Html>
<Head> 
<Title> </Title>
</Head>
<Body>
<h1> Сумматор </h1>
<form action="calc.php" method="GET">
<input type="text" name="arg1" value="">
<input type="text" name="arg2" value="">
<input type="submit"  value="Cуммировать">
</form>
<?php
if (isset($_GET['arg1']) && isset($_GET['arg2'])) {
echo "Результат: ".intval($_GET['arg1'])+intval($_GET['arg2']);
}
?>
</Body>
</Html>