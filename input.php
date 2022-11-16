<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>いずたにデンタルクリニック</title>

  <link rel="stylesheet" href="assets/css/destyle.css">
  <link rel="stylesheet" href="assets/scss/common.css">
  <link rel="stylesheet" href="assets/scss/contact.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Slickslider css の読み込み -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Cinzel font / Shippori Mincho 読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Shippori+Mincho:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Tailwindcssの読み込み -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <!-- Jqueryの読み込み -->
  <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <header>
    <section id="header">
      <div class="header__wrap c-layout--lv0">
        <div class="header__block c-layout--lv1">
          <a class="header__logo" href="index.html">
            <img src="assets/image/common/header/logo.png" alt="いずたにデンタルクリニック">
          </a>
          <nav class="header__nav header-nav">
            <ul class="header-nav-list">
              <li class="header-nav-list__item"><a href="greeting.html">ごあいさつ</a></li>
              <li class="header-nav-list__item"><a href="information.html">医院紹介</a></li>
              <li class="header-nav-list__item"><a href="implant.html">インプラント治療</a></li>
              <li class="header-nav-list__item"><a href="access.html">アクセス</a></li>
              <li class="header-nav-list__item"><a href="contact.html">お問い合わせ</a></li>
            </ul>
          </nav>
          <div class="header__ham md:hidden">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </section>
  </header>

  <!-- fv -->
  <section id="fv">
    <div class="fv__block c-layout--lv0">
      <div class="fv__message fv-message c-layout--lv1">
        <h1 class="fv-message__title">
          <span class="en">contact</span>
          お問い合わせ
        </h1>
        <div class="fv-message__breadcrumb">
          <a href="index.html">TOP</a>
          <p>お問い合わせ</p>
        </div>
      </div>
      <div class="fv__slide fv-slide c-layout--lv0">
        <div class="fv-slide__scroll fv-slide-scroll hidden md:flex">
          <!-- <p class="fv-slide-scroll__text">SCROLL DOWN</p> -->
        </div>
        <ul class="fv-slide__contents fv-slide-contents">
          <li>
            <img src="assets/image/contact/fv.png" alt="">
          </li>
        </ul>
        <nav class="fv-slide__nav">
          <ul class="fv-slide-nav-list">
            <li class="fv-slide-nav-list__item"><a href="http://" target="_blank" rel="noopener noreferrer" class="fv-slide-nav-list__item-anchor">
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/line.svg" alt="">
                  <p class="fv-slide-nav-list__text">LINE相談</p>
                </div>
              </a></li>
            <li class="fv-slide-nav-list__item hidden md:block"><a class="fv-slide-nav-list__item-anchor" href="http://" target="_blank" rel="noopener noreferrer">
                <p class="fv-slide-nav-list__text-sub">まずは資料請求</p>
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/data.svg" alt="">
                  <p class="fv-slide-nav-list__text">資料請求はこちら</p>
                </div>
              </a></li>
            <li class="fv-slide-nav-list__item"><a class="fv-slide-nav-list__item-anchor" href="http://" target="_blank" rel="noopener noreferrer">
                <p class="fv-slide-nav-list__text-sub">ご予約・お問い合わせ</p>
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/tel.svg" alt="">
                  <p class="fv-slide-nav-list__text">079-280-5555</p>
                </div>
              </a></li>
            <li class="fv-slide-nav-list__item"><a class="fv-slide-nav-list__item-anchor" href="http://" target="_blank" rel="noopener noreferrer">
                <p class="fv-slide-nav-list__text-sub">24時間受付</p>
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/mail.svg" alt="">
                  <p class="fv-slide-nav-list__text">ご相談はこちら</p>
                </div>
              </a></li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <!-- contact form -->
  <section id="form" class="form c-layout--lv0">
    <div class="c-layout--lv2">
      <h2 class="c-section-title form__title">Contact Form<span class="jp">お問い合わせフォーム</span></h2>
      <div class="c-layout--lv3">
        <p class="form__pre">
          いずたにデンタルクリニック姫路駅前院では、<br>
          患者さまの疑問やお悩みなどにお答えするために無料カウンセリングを行っております。<br>
          診療・お問い合わせをご希望の方はこちらのフォームより記入してください。<br>
          また診療やお問い合わせをご希望の方もこちらよりお問い合わせください。
        </p>
        <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
          <div class="form__contents form-contents">
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">お問い合わせ種別</label>
              <div class="form-contents-item__block form-contents__radio">
                <input type="radio" name="type" id="type01">
                <label for="type01">無料カウンセリング</label>
                <input type="radio" name="type" id="type02">
                <label for="type02">お問い合わせ</label>
                <input type="radio" name="type" id="type03">
                <label for="type03">資料請求</label>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">お名前<span>必須</span></label>
              <div class="form-contents-item__block">
                <input type="text" name="name" placeholder="姫路　花子" value="" required>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">郵便番号</label>
              <div class="form-contents-item__block">
                <input type="text" name="post" placeholder="670-0962" value="">
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">住所</label>
              <div class="form-contents-item__block">
                <input type="text" name="adress" placeholder="兵庫県姫路市南駅前町96-1　サウスワンビル４階" value="">
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">ご連絡先<span>必須</span></label>
              <div class="form-contents-item__block">
                <input type="text" name="tel" placeholder="079-280-5555" value="" required>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">メールアドレス<span>必須</span></label>
              <div class="form-contents-item__block">
                <input type="text" name="mail" placeholder="〇〇＠〇〇.jp" value="" required>
              </div>
            </div>
            <div class="form-contents__item form-contents-item form-contents-item-reserve">
              <label class="form-contents-item__label" for="">ご予約希望日時</label>
              <div class="form-contents-item__block form-contents-item__reserve">
                <div class="form-contents-item-reserve__block">
                  <p>第一希望</p>
                  <input type="date" value="" name="reserve01-date">
                  <input type="text" name="reserve01-time" placeholder="10" value="">
                  <p>時ごろ</p>
                </div>
                <div class="form-contents-item-reserve__block">
                  <p>第二希望</p>
                  <input type="date" value="" name="reserve02-date">
                  <input type="text" name="reserve01-time" placeholder="10" value="">
                  <p>時ごろ</p>
                </div>
                <p class="form-contents-item-reserve__text">
                  ※診療曜日・時間内でお願いします。（診療時間　火・金・土　10:00～17:00）<br>
                  ※1週間後以降でご指定下さい。<br>
                  ※お申込は仮予約となります。医院からの予約確認連絡の後ご予約が確定いたします。
                </p>
              </div>
            </div>
            <div class="form-contents__item form-contents-item form-contents-item-reply">
              <label class="form-contents-item__label" for="">医院からの返信方法</label>
              <div class="form-contents-item__block">
                <div class="form-contents__radio">
                  <input type="radio" name="reply" id="reply01">
                  <label for="reply01">TEL</label>
                  <input type="radio" name="reply" id="reply02">
                  <label for="reply02">メール</label>
                  <input type="radio" name="reply" id="reply03">
                  <label for="reply03">どちらでも可</label>
                </div>
                <p class="form-contents-item-reply__text">
                  ※携帯メールへの返信をご希望の方は、PCメール受信拒否設定を解除してからご入力ください。
                </p>
              </div>
            </div>
            <div class="form-contents__item form-contents-item form-contents-item-request">
              <label class="form-contents-item__label" for="">ご要望など</label>
              <div class="form-contents-item__block">
                <textarea name="content" rows="5" placeholder=""></textarea>
              </div>
            </div>
          </div>
          <button class="form__button" type="submit">入力内容を確認する</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer">
    <div class="footer c-layout--lv0">
      <div class="footer__infoarea footer-infoarea c-layout--lv2">
        <div class="footer-infoarea__item footer-infoarea-item footer-infoarea-item-course">
          <p class="footer-infoarea-item__title">診療科目</p>
          <div class="footer-infoarea-item__contents">
            <p class="text">インプラント</p>
          </div>
        </div>
        <div class="footer-infoarea__item footer-infoarea-item footer-infoarea-item-time">
          <p class="footer-infoarea-item__title">診療時間</p>
          <div class="footer-infoarea-item__contents">
            <ul class="footer-infoarea-item-time__list">
              <li class="footer-infoarea-item-time__item">
                10時～17時
              </li>
              <li class="footer-infoarea-item-time__item">
                <p>火</p>
                <div></div>
              </li>
              <li class="footer-infoarea-item-time__item">
                <p>金</p>
                <div></div>
              </li>
              <li class="footer-infoarea-item-time__item">
                <p>土</p>
                <div></div>
              </li>
            </ul>
            <p class="footer-infoarea-item-time__text">診療時間　火・金・土　10:00～17:00</p>
          </div>
        </div>
        <div class="footer-infoarea__item footer-infoarea-item footer-infoarea-item-time-access">
          <p class="footer-infoarea-item__title">アクセス</p>
          <div class="footer-infoarea-item__contents">
            <p class="footer-infoarea-item-time-access__text">〒670-0962　兵庫県姫路市南駅前町96-1　サウスワンビル４階</p>
            <div class="footer-infoarea-item-time-access__block">
              <div class="footer-infoarea-item-time-access__item">
                <p>JR姫路駅</p>
                <p>徒歩<span>1</span>分</p>
              </div>
              <div class="footer-infoarea-item-time-access__item">
                <p>山陽姫路駅</p>
                <p>徒歩<span>5</span>分</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13100.882439480833!2d134.6909593!3d34.8255454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554e1a204e20a63%3A0x44b953e500cf1891!2z44GE44Ga44Gf44Gr44OH44Oz44K_44Or44Kv44Oq44OL44OD44KvIOWnq-i3r-mnheWJjemZoiDjgqTjg7Pjg5fjg6njg7Pjg4g!5e0!3m2!1sja!2stw!4v1668599315970!5m2!1sja!2stw" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="footer__map"></iframe>
      <div class="footer__menuarea c-layout--2 footer-menuarea">
        <small>Copyright © 2022 All rights reserved</small>
        <nav class="footer-menuarea__nav">
          <ul class="footer-menuarea-nav-list">
            <li class="footer-menuarea-nav-list__item"><a href="">医院紹介</a></li>
            <li class="footer-menuarea-nav-list__item"><a href="">インプラント治療</a></li>
            <li class="footer-menuarea-nav-list__item"><a href="">費用</a></li>
            <li class="footer-menuarea-nav-list__item"><a href="">よくある質問</a></li>
            <li class="footer-menuarea-nav-list__item"><a href="">アクセス</a></li>
            <li class="footer-menuarea-nav-list__item"><a href="">お問い合わせ</a></li>
          </ul>
        </nav>
        <a class="footer__logo" href="https://www.senya-implantcenter.com/" target="_blank" rel="noopener noreferrer">
          <img src="assets/image/common/footer/logo.png" alt="">
        </a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    const headerHeight = $('header').height();
    const headerBlock = $('.header__block');
    const navHamClass = $('.header__ham');
    const $SPheaderMenu_ClassName = $('.header__nav');
    const SPheader_Active_ClassName = "is--active"
    const windowWidth = $(window).width();
    const widthPC = 768;

    $(window).on('load', function() {
      if (windowWidth < widthPC) {
        $SPheaderMenu_ClassName.css('padding-top', headerHeight);
      }
    });
    navHamClass.on('click', function() {
      headerBlock.toggleClass(SPheader_Active_ClassName);
    });
  </script>
</body>

</html>