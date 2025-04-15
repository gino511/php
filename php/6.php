<?php
   // 使用 mysqli_connect() 建立與遠端資料庫的連線
   // 參數：主機位址、資料庫使用者名稱、密碼、資料庫名稱
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   // 使用 mysqli_query() 向資料庫發出 SQL 查詢指令
   // 這裡是查詢 user 資料表中的所有資料
   $result = mysqli_query($conn, "SELECT * FROM user");

   // 設定一個布林變數 $login，初始為 FALSE，表示尚未登入成功
   $login = FALSE;

   // 使用 while 迴圈逐筆從查詢結果中抓出資料
   while ($row = mysqli_fetch_array($result)) {
     // 檢查使用者輸入的帳號和密碼是否與某筆資料相符
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       // 如果符合，設定 $login 為 TRUE
       $login = TRUE;
     }
   } 

   // 判斷 $login 是否為 TRUE，如果是，表示登入成功
   if ($login == TRUE)
     echo "登入成功";
   else
     // 否則表示帳號或密碼錯誤
     echo "帳號/密碼 錯誤";
?>
