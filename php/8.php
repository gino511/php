<?php
    // 啟動 session，用來追蹤使用者的資料（必須放在最前面）
    session_start();

    // 檢查 session 中是否已經設定了 "counter" 變數
    if (!isset($_SESSION["counter"]))
        // 如果沒有，代表這是第一次進入，將 "counter" 設定為 1
        $_SESSION["counter"] = 1;
    else
        // 如果已經有 "counter"，則遞增計數器值
        $_SESSION["counter"]++;

    // 顯示目前的計數器值
    echo "counter=" . $_SESSION["counter"];
    
    // 提供一個連結，指向重置計數器的頁面
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
