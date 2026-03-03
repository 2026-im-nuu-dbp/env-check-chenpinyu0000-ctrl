<?php
// 多媒體程式設計 — 簡單學習目標顯示
$goals = [
    '了解多媒體系統的基本概念與架構',
    '學習音訊、影像與影像處理的基礎',
    '實作多媒體播放、編碼與同步處理',
    '掌握常見媒體格式、容器與串流技術',
    '運用程式設計整合互動式多媒體應用'
];
?>
<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>多媒體程式設計學習目標</title>
  <style>body{font-family:Arial,Helvetica,sans-serif;max-width:720px;margin:40px auto;padding:0 16px}h1{color:#222}ul{line-height:1.8}</style>
</head>
<body>
  <h1>多媒體程式設計學習目標</h1>
  <ul>
  <?php foreach ($goals as $g): ?>
    <li><?php echo htmlspecialchars($g, ENT_QUOTES, 'UTF-8'); ?></li>
  <?php endforeach; ?>
  </ul>
</body>
</html>
