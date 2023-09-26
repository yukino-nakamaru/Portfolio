<?php require '../header.php'; ?>
<from action="price-output2.php" method="post">
単価 <input type="text" name="price"> 円
×
個数 <input type="text" name="count"> 個
<input type="submit" value="計算">
</from>
<?php require '../footer.php'; ?>