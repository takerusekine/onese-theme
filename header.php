<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>
    <?php
                global $page, $paged;
                if (is_search()) :
                wp_title('', true, 'left');
                echo '｜';
                else :
                wp_title('｜', true, 'right');
                endif;
                bloginfo('name');
                if (is_front_page()) :
                echo '｜';
                bloginfo('description');
                endif;
                if ($paged >= 2 || $page >= 2) :
                echo '｜' . sprintf('%sページ', max($paged, $page));
                endif;
            ?>
  </title>

  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.min.css">
  <link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <?php wp_head();?>

</head>

<body>
  <div class="topbar">
    <div class="innertopbar">

      <span class="companyname">
        <a href="<?php echo home_url('/');?>"></a>
      </span>
      <div class="globalNavi">
        <?php wp_nav_menu(
                array(
                'container'  => '',
                'theme_location' => 'place_global'
                )
                );?>
      </div>
    </div>
  </div>
  </div>

  <?php if (is_front_page()): ?>
    <div class="keyvisual">
    </div>
    <?php elseif(is_page('corpinfo')): ?>
      <div class="corpinfokv">
        <div class="innerkvtable">

          <div class="innerkv">
            <h1>会社概要</h1>
          </div>
        </div>

      </div>
      <?php elseif(is_page('business')): ?>
        <div class="businesskv">
          <div class="innerkvtable">

            <div class="innerkv">
              <h1>事業内容</h1>
            </div>
          </div>


        </div>
        <?php elseif(is_page('careers')): ?>
          <div class="careerkv">
            <div class="innerkvtable">

              <div class="innerkv">
                <h1>採用情報</h1>
              </div>
            </div>


          </div>
          <?php elseif(is_page('access')):?>
            <div class="accesskv">
              <div class="innerkvtable">

                <div class="innerkv">
                  <h1>アクセス</h1>
                </div>
              </div>


            </div>
            <?php elseif(is_page('contact')):?>
              <div class="contactkv">
                <div class="innerkvtable">

                  <div class="innerkv">
                    <h1>お問い合わせ</h1>
                  </div>
                </div>

              </div>
              <?php elseif(is_page('officers')):?>
                <div class="brankkv">

                </div>
                <?php endif;?>