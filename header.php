<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- ワードプレス側で設定した言語を使用する関数 -->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <!-- 文字コードを出力するコード -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/sass/main.css">
  <!-- esc_url関数によりエスケープ処理を実行 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js" defer></script>
</head>
<body>
  <header>
    
  </header>