<?php
    // 啟動 session，用來操作 session 變數
    session_start();

    // 使用 unset() 移除名為 "counter" 的 session 變數，達到重置效果
    unset($_SESSION["counter"]);

    // 顯示提示訊息，告知使用者重置成功
    echo "counter重置成功....";

    // 使用 meta 標籤設定 2 秒後自動重新導向到 8.counter.php
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
