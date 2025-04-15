<?php
    // 關閉錯誤報告（讓畫面上不顯示錯誤訊息）
    error_reporting(0);

    // 建立與資料庫的連線（主機, 使用者帳號, 密碼, 資料庫名稱）
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 從 bulletin 資料表中選出所有資料
    $result = mysqli_query($conn, "SELECT * FROM bulletin");

    // 建立一個 HTML 表格，表頭先列出欄位名稱
    echo "<table border=2>
            <tr>
                <td>佈告編號</td>
                <td>佈告類別</td>
                <td>標題</td>
                <td>佈告內容</td>
                <td>發佈時間</td>
            </tr>";

    // 使用 while 逐筆抓取資料並列出每一筆佈告的內容
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>";
        echo $row["bid"];         // 顯示佈告編號
        echo "</td><td>";
        echo $row["type"];        // 顯示佈告類別
        echo "</td><td>"; 
        echo $row["title"];       // 顯示標題
        echo "</td><td>";
        echo $row["content"];     // 顯示佈告內容
        echo "</td><td>";
        echo $row["time"];        // 顯示發佈時間
        echo "</td></tr>";
    }

    // 結束表格
    echo "</table>";
?>
