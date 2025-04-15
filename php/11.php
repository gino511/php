<?php
    // 關閉錯誤訊息顯示（讓畫面上不會出現警告）
    error_reporting(0);

    // 啟動 session，用來驗證使用者是否已登入
    session_start();

    // 檢查 session 裡是否有 "id"，如果沒有代表尚未登入
    if (!$_SESSION["id"]) {
        echo "請先登入"; // 提示使用者必須登入
        // 3 秒後導回登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        // 如果已登入，顯示歡迎訊息及操作選單（登出、管理使用者、新增佈告）
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 建立與資料庫的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 查詢 bulletin 資料表的所有資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin");

        // 建立表格的標題列
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

        // 用 while 一筆一筆印出每一則佈告內容
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>
                <a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
                <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a>
                </td><td>";

            echo $row["bid"];     // 顯示佈告編號
            echo "</td><td>";
            echo $row["type"];    // 顯示佈告類別
            echo "</td><td>"; 
            echo $row["title"];   // 顯示標題
            echo "</td><td>";
            echo $row["content"]; // 顯示內容
            echo "</td><td>";
            echo $row["time"];    // 顯示發佈時間
            echo "</td></tr>";
        }

        // 表格結尾
        echo "</table>";
    }
?>
