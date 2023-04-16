<?php get_header(); ?>
  <section class="top">
    <nav class="top__nav">
      <i class="top__i fa-solid fa-pause"></i>
      <i class="top__i fa-brands fa-instagram"></i>
      <i class="top__i fa-brands fa-youtube"></i>
      <i class="top__i fa-brands fa-twitter"></i>
      <i class="top__i fa-brands fa-facebook"></i>
    </nav>
    <div class="top__fav-container">
      <h3 class="top__fav-title">人気のキーワード</h3>
      <div class="top__fav-content">
        <img class="top__fav-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow-left.png">
        <div class="top__fav-group">
          <p class="top__fav-item">#アイシャドウ</p>
          <p class="top__fav-item">#アイシャドウ</p>
          <p class="top__fav-item">#アイシャドウ</p>
        </div>
        <img class="top__fav-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow-right.png">
      </div>
    </div>
    <div class="top__scroll-container">
      <div class="top__scroll-chevron"></div>
      <div class="top__scroll-chevron"></div>
      <div class="top__scroll-chevron"></div>
      <p class="top__scroll-text">scroll down</p>
    </div>
  </section>
  <section class="genre" id="app">
    <transition>
      <div class="genre__content" v-show="show">
        <div class="genre__item">
          <img class="genre__pic" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyeshadow.webp">
        </div>
        <h4 class="genre__item">アイシャドウ</h4>
        <p class="genre__item">瞳の周りのメイク！目に陰影をつけることで目元を立体的に美しく見せるためのメイク！
        </p>
      </div>
    </transition>
    <transition>
      <div class="genre__content" v-show="show">
        <div class="genre__item">
          <img class="genre__pic" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyeshadow.webp">
        </div>
        <h4 class="genre__item">アイシャドウ</h4>
        <p class="genre__item">瞳の周りのメイク！目に陰影をつけることで目元を立体的に美しく見せるためのメイク！
        </p>
      </div>
    </transition>
    <transition>
      <div class="genre__content" v-show="show">
        <div class="genre__item">
          <img class="genre__pic" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyeshadow.webp">
        </div>
        <h4 class="genre__item">アイシャドウ</h4>
        <p class="genre__item">瞳の周りのメイク！目に陰影をつけることで目元を立体的に美しく見せるためのメイク！
        </p>
      </div>
    </transition>
    <transition>
      <div class="genre__content" v-show="show">
        <div class="genre__item">
          <img class="genre__pic" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyeshadow.webp">
        </div>
        <h4 class="genre__item">アイシャドウ</h4>
        <p class="genre__item">瞳の周りのメイク！目に陰影をつけることで目元を立体的に美しく見せるためのメイク！
        </p>
      </div>
    </transition>
    <transition>
      <div class="genre__content" v-show="show">
        <div class="genre__item">
          <img class="genre__pic" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eyeshadow.webp">
        </div>
        <h4 class="genre__item">アイシャドウ</h4>
        <p class="genre__item">瞳の周りのメイク！目に陰影をつけることで目元を立体的に美しく見せるためのメイク！
        </p>
      </div>
    </transition>
  </section>
</body>
</html>