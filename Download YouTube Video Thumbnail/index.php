<?php
  if(isset($_POST['button'])){
    $imgUrl = $_POST['imgurl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $downloadImg = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment;filename="thumbnail.jpg"');
    echo $downloadImg;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="data:image/png;base64,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">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Thumbnail Download </header>
    <div class="url-input">
      <span class="title">Paste video url:</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/watch?v=lqwdD2ivIbM" required>
        <input class="hidden-input" type="hidden" name="imgurl">
        <span class="bottom-line"></span>
      </div>
    </div>
    <div class="preview-area">
      <img class="thumbnail" src="" alt="">
      <i class="icon fas fa-download"></i>
      <span>Paste video url to see preview</span>
    </div>
    <button class="download-btn" type="submit" name="button"> Download </button>
  </form>
  <script src="script.js"></script>
</body>
</html>