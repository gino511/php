<?php
    // 啟動 session，用來操作使用者登入的資料
    session_start();

    // 使用 unset() 刪除 session 中的 "id"，達到登出的效果
    unset($_SESSION["id"]);

    // 顯示登出成功訊息
    echo "登出成功....";

    // 設定 3 秒後自動導回登入頁面 (2.login.html)
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
