<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "SELECT * FROM user");

   # $login 變數用來紀錄是否成功登入，預設為 FALSE
   $login = FALSE;

   # 用 while 逐筆檢查查詢結果中的帳號密碼是否符合
   while ($row = mysqli_fetch_array($result)) {
     # 如果使用者輸入的帳號與密碼與某筆資料相符
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE; // 登入成功
     }
   } 

   # 如果登入成功
   if ($login == TRUE) {
      session_start();                   // 啟動 session
      $_SESSION["id"] = $_POST["id"];   // 將登入者帳號存入 session
      echo "登入成功";                  // 顯示登入成功訊息
      echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3 秒後跳轉至 bulletin 頁面
   }
   else {
      echo "帳號/密碼 錯誤";             // 登入失敗
      echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   // 3 秒後跳轉回登入頁面
   }
?>
