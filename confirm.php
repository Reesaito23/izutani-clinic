<?php
// フォームのボタンが押されたら
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // フォームから送信されたデータを各変数に格納
  $type = $_POST["type"];
  $name = $_POST["name"];
  $post = $_POST["post"];
  $adress = $_POST["adress"];
  $tel = $_POST["tel"];
  $mail = $_POST["mail"];
  $reserve01Date = $_POST["reserve01-date"];
  $reserve01Time = $_POST["reserve01-time"];
  $reserve02Date = $_POST["reserve02-date"];
  $reserve02Time = $_POST["reserve02-time"];
  $reply = $_POST["reply"];
  $content  = $_POST["content"];
}

// 送信ボタンが押されたら
if (isset($_POST["submit"])) {
  // 送信ボタンが押された時に動作する処理をここに記述する

  // 日本語をメールで送る場合のおまじない
  mb_language("ja");
  mb_internal_encoding("UTF-8");

  // mb_send_mail("sample@gmail.com", "メール送信テスト", "メール本文");

  // 件名を変数subjectに格納
  $subject = "［自動送信］お問い合わせ内容の確認";

  // メール本文を変数bodyに格納
  $body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【お問い合わせ種別】
{$type}

【 お名前 】 
{$name}

【 郵便番号 】 
{$post}

【 住所 】 
{$adress}

【 ご連絡先 】 
{$tel}

【 メールアドレス 】 
{$mail}

【 医院からの返信方法 】 
{$reply}

【 内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;

  // 送信元のメールアドレスを変数fromEmailに格納
  $fromEmail = "contact@izutanidc-himeji.com";

  //２件メールを送信する
  $to = "{$mail},{$fromEmail}";

  // 送信元の名前を変数fromNameに格納
  $fromName = "いずたにデンタルクリニック";

  // ヘッダ情報を変数headerに格納する      
  $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

  // メール送信を行う
  mb_send_mail($to, $subject, $body, $header);

  // サンクスページに画面遷移させる
  header("Location: thanks.html");
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>インプラント治療ならいずたにデンタルクリニック姫路駅前院｜JR姫路駅から徒歩1分</title>
  <meta name="description" content="いずたにデンタルクリニック姫路駅前院はインプラント治療を専門に行っている歯科医院です。JR姫路駅から徒歩1分のところにあります。LINEによる相談も受け付けています。" />
  <meta name="keywords" content="インプラント,姫路,いずたにデンタルクリニック">

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
            <li class="fv-slide-nav-list__item"><a href="https://lin.ee/GZsUVL1" target="_blank" rel="noopener noreferrer" class="fv-slide-nav-list__item-anchor">
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/line.svg" alt="">
                  <p class="fv-slide-nav-list__text">LINE相談</p>
                </div>
              </a></li>
            <li class="fv-slide-nav-list__item hidden md:block"><a class="fv-slide-nav-list__item-anchor" href="contact.html">
                <p class="fv-slide-nav-list__text-sub">まずは資料請求</p>
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/data.svg" alt="">
                  <p class="fv-slide-nav-list__text">資料請求はこちら</p>
                </div>
              </a></li>
            <li class="fv-slide-nav-list__item"><a class="fv-slide-nav-list__item-anchor" href="contact.html">
                <p class="fv-slide-nav-list__text-sub">ご予約・お問い合わせ</p>
                <div class="fv-slide-nav-list__block">
                  <img src="assets/image/common/fv/slide-nav/tel.svg" alt="">
                  <p class="fv-slide-nav-list__text">079-280-5555</p>
                </div>
              </a></li>
            <li class="fv-slide-nav-list__item"><a class="fv-slide-nav-list__item-anchor" href="contact.html">
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
        <form action="confirm.php" method="post">
          <input type="hidden" name="type" value="<?php echo $type; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="hidden" name="post" value="<?php echo $post; ?>">
          <input type="hidden" name="adress" value="<?php echo $adress; ?>">
          <input type="hidden" name="tel" value="<?php echo $tel; ?>">
          <input type="hidden" name="mail" value="<?php echo $mail; ?>">
          <input type="hidden" name="reserve01-date" value="<?php echo $reserve01Date; ?>">
          <input type="hidden" name="reserve01-time" value="<?php echo $reserve01Time; ?>">
          <input type="hidden" name="reserve02-date" value="<?php echo $reserve02Date; ?>">
          <input type="hidden" name="reserve02-time" value="<?php echo $reserve02Time; ?>">
          <input type="hidden" name="reply" value="<?php echo $reply; ?>">
          <input type="hidden" name="content" value="<?php echo $content; ?>">
          <div class="form__contents form-contents">
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">お問い合わせ種別</label>
              <div class="form-contents-item__block">
                <?php echo $type; ?>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">お名前<span>必須</span></label>
              <div class="form-contents-item__block">
                <?php echo $name; ?>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">郵便番号</label>
              <div class="form-contents-item__block">
                <?php echo $post; ?>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">住所</label>
              <div class="form-contents-item__block">
                <?php echo $adress; ?>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">ご連絡先<span>必須</span></label>
              <div class="form-contents-item__block">
                <?php echo $tel; ?>
              </div>
            </div>
            <div class="form-contents__item form-contents-item">
              <label class="form-contents-item__label" for="">メールアドレス<span>必須</span></label>
              <div class="form-contents-item__block">
                <?php echo $mail; ?>
              </div>
            </div>
            <div class="form-contents__item form-contents-item form-contents-item-reserve">
              <label class="form-contents-item__label" for="">ご予約希望日時</label>
              <div class="form-contents-item__block form-contents-item__reserve">
                <div class="form-contents-item-reserve__block">
                  <p>第一希望</p>
                  <?php echo $reserve01Date; ?>
                  <?php echo $reserve01Time; ?>
                  <p>時ごろ</p>
                </div>
                <div class="form-contents-item-reserve__block">
                  <p>第二希望</p>
                  <?php echo $reserve02Date; ?>
                  <?php echo $reserve02Time; ?>
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
                <?php echo $reply; ?>
                <p class="form-contents-item-reply__text">
                  ※携帯メールへの返信をご希望の方は、PCメール受信拒否設定を解除してからご入力ください。
                </p>
              </div>
            </div>
            <div class="form-contents__item form-contents-item form-contents-item-request">
              <label class="form-contents-item__label" for="">ご要望など</label>
              <div class="form-contents-item__block">
                <?php echo $content; ?>
              </div>
            </div>
          </div>
          <button class="form__button" type="submit" name="submit">入力内容を確認する</button>
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
            <li class="footer-menuarea-nav-list__item">
              <a href="greeting.html">ごあいさつ</a>
            </li>
            <li class="footer-menuarea-nav-list__item">
              <a href="information.html">医院紹介</a>
            </li>
            <li class="footer-menuarea-nav-list__item">
              <a href="implant.html">インプラント治療</a>
            </li>
            <li class="footer-menuarea-nav-list__item">
              <a href="access.html">アクセス</a>
            </li>
            <li class="footer-menuarea-nav-list__item">
              <a href="contact.html">お問い合わせ</a>
            </li>
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
    const navPos = $('.fv-slide__nav').offset().top;
    const navHeight = $('.fv-slide__nav').outerHeight();
    const navFixedTop = navPos - headerHeight
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > navFixedTop) {
        $('.fv-Nav--fixed').css('top', headerHeight);
        $('.fv-slide__nav').addClass('fv-Nav--fixed');
        console.log("1")
      } else {
        $('.fv-Nav--fixed').css('top', 'initial');
        $('.fv-slide__nav').removeClass('fv-Nav--fixed');
      }
    });
  </script>
</body>

</html>