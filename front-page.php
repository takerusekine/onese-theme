<?php get_header(); ?>
<section class="section" id="topcontent">
<?php if (!wp_is_mobile()): ?>
  <div class="main-content-area">
    <h1>oneseとは？</h1>
    <ol class="three-col-list">
      <li class="bx-img">
        <figure class="three_col_img three_col_left">
          <span class="businesstag"><a href="<?php echo site_url();?>/business/">事業内容</a></span>

        </figure>
        <p class="bx-img-text">
          営業プロフェッショナルの集団です。詳しくは、<a href="<?php echo site_url();?>/business/">事業内容</a>をご覧ください。
        </p>
      </li>
      <li class="bx-img">
        <figure class="three_col_img three_col_center">
          <span class="corpinfotag"><a href="<?php echo site_url();?>/corpinfo/">会社概要</a></span>
        </figure>
        <p  class="bx-img-text">
          oneseのポリシーは、お客様にご納得いただける成果を上げることです。詳しくは<a href="<?php echo site_url();?>/corpinfo/">こちら</a>をご覧ください。
        </p>
      </li>
      <li class="bx-img">
        <figure class="three_col_img three_col_right">
          <span class="contacttag"><a href="<?php echo site_url();?>/contact/">お問い合わせ</a></span>
        </figure>
        <p  class="bx-img-text">
          お気軽にお問い合わせください。どの内容のお問い合わせも<a href="<?php echo site_url();?>/contact/">こちらから</a>ご連絡いただけます。
        </p>
      </li>
    </ol>
  </div>
<?php elseif (wp_is_mobile()):?>
  <table class="main-content-area">
    <tr>
      <td>
        <h3>Oneseとは？</h3>
      </td>
      <td>
        <div class="bx-img">
          <figure class="three_col_img three_col_left">
            <span class="businesstag"><a href="<?php echo site_url();?>/business/">事業内容</a></span>
          </figure>
          <p class="bx-img-text">
            営業プロフェッショナルの集団です。詳しくは、<a href="<?php echo site_url();?>/business/">事業内容</a>をご覧ください。
          </p>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="bx-img">
          <figure class="three_col_img three_col_center">
            <span class="corpinfotag"><a href="<?php echo site_url();?>/corpinfo/">会社概要</a></span>
          </figure>
          <p  class="bx-img-text">
            oneseのポリシーは、お客様にご納得いただける成果を上げることです。詳しくは<a href="<?php echo site_url();?>/corpinfo/">こちら</a>をご覧ください。
          </p>
        </div>
      </td>
      <td>
        <div class="bx-img">
          <figure class="three_col_img three_col_right">
            <span class="contacttag"><a href="<?php echo site_url();?>/contact/">お問い合わせ</a></span>
          </figure>
          <p  class="bx-img-text">
            お気軽にお問い合わせください。どの内容のお問い合わせも<a href="<?php echo site_url();?>/contact/">こちらから</a>ご連絡いただけます。
          </p>
        </div>
      </td>
    </tr>
  </table>
<?php endif; ?>
</section>
<section class="section" id="secondcontent">
  <?php if (!wp_is_mobile()): ?>
  <div class="main-content-area">
    <h3>採用情報</h3>
    <ol class="three-col-list">
      <li class="bx-img">
        <span class="headerspan">新卒採用</span>
        <p class="bx-img-text">
          未経験者でも大丈夫です。営業ノウハウをじっくり教えていきます。詳しくは<a href="<?php echo site_url();?>/career/">こちらから</a>
        </p>
      </li>
      <li class="bx-img">
        <span class="headerspan">中途採用</span>

        <p  class="bx-img-text">
          弊社で成長して営業のプロとしてやっていきましょう。詳しくは<a href="<?php echo site_url();?>/career/">こちらから</a>
        </p>
      </li>
      <li class="bx-img">
        <span class="headerspan">アルバイト・パート</span>

        <p  class="bx-img-text">
          アルバイト・パートも募集しています。お気軽に<a href="<?php echo site_url();?>/contact/">こちらから</a>ご連絡ください。
        </p>
      </li>
    </ol>
  </div>
<?php elseif (wp_is_mobile()): ?>
  <table class="main-content-area add-margin">
    <tr>
      <td>
        <h3>採用情報</h3>
      </td>
      <td>
        <div class="bx-img">
          <span class="headerspan">新卒採用</span>
          <p class="bx-img-text">
            未経験者でも大丈夫です。営業ノウハウをじっくり教えていきます。詳しくは<a href="<?php echo site_url();?>/career/">こちらから</a>
          </p>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="bx-img">
          <span class="headerspan">中途採用</span>
          <p  class="bx-img-text">
            弊社で成長して営業のプロとしてやっていきましょう。詳しくは<a href="<?php echo site_url();?>/career/">こちらから</a>
          </p>
        </div>
      </td>
      <td>
        <div class="bx-img">
          <span class="headerspan">アルバイト・パート</span>
          <p  class="bx-img-text">
            アルバイト・パートも募集しています。お気軽に<a href="<?php echo site_url();?>/contact/">こちらから</a>ご連絡ください。
          </p>
        </div>
      </td>
    </tr>
  </table>

<?php endif; ?>
</section>
<?php get_footer(); ?>
