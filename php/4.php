<?php
# mysqli_connect() 建立資料庫連結
$conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

# mysqli_query() 從資料庫查詢資料
$result = mysqli_query($conn, "SELECT * FROM user");

# 用 while 迴圈搭配 mysqli_fetch_array() 一筆一筆抓出來
while ($row = mysqli_fetch_array($result)) {
    echo $row["id"] . " " . $row["pwd"] . "<br>";
}
?>
