<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>imusic</title>
  <link rel="stylesheet" href="assets/main.css">
</head>
<body>
  <header>
    <h1 class="logo">imusic works</h1>
    <button class="btn_toggle_menu" id="btn_menu" onclick="toggle_menu()">menu</button>
  </header>
  <main class="main_contents">

  </main>
  <footer class="">
    <p class="small_text">copyright imusic 2022</p>
  </footer>
  <nav id="toggle_menu" style="display: none;"><?php include 'assets/menu.php';?></nav>
  <script src="assets/main.js"></script>
</body>
</html>