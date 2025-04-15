<?php
   // 使用 mysqli_connect() 建立與資料庫的連線
   // 參數依序為：主機位置、使用者名稱、密碼、資料庫名稱
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   // 使用 mysqli_query() 從資料庫中執行 SQL 查詢指令
   // 這裡查詢的是 user 資料表的所有資料（select * from user）
   $result = mysqli_query($conn, "SELECT * FROM user");

   // 使用 while 迴圈配合 mysqli_fetch_array()，一筆一筆抓出查詢結果
   // 每次迴圈會從查詢結果中取出一筆資料，直到沒有資料為止
   while ($row = mysqli_fetch_array($result)) {
     // 印出這筆資料的 id 和 pwd 欄位內容，並換行
     echo $row["id"] . " " . $row["pwd"] . "<br>";
   } 
?>
