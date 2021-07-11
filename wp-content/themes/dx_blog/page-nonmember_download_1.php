<?php
// ログインしていなかったらトップページに遷移させる。
// if (!is_user_logged_in()){
//     header( "location: " . home_url() );
// }
// var_dump($name);
?>

<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div class="docDownloadMain">
    <div class="docDownloadTitle">
        <h1>お役立ち資料ダウンロード</h1>
        <?php //echo do_shortcode( '[download id="51"]' );?>
        <h2>eBOOK　DOWNLOAD</h2>
    </div>

    <div class="docDownloadLeft">
        <div class="docDownloadContainer">
            <div class="docDownloadImage">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
            </div>

            <div class="docDownloadDescription">
                <div class="docDownloadDescriptionInline">
                    <h2>この資料で分かる3つのポイント</h2>
                    <p>1．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>2．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                </div>
            </div>
        </div>

        <div class="nonMemberDocDownloadButton">
            <div><?php echo do_shortcode('[wpmem_form register]');?></div>
            <div class="nonMemberDocDownloadButtonInner">
                <!-- <a href="http://localhost:8888/wordpress/download/51/"> -->
                <a href="<?php bloginfo('url'); ?>/download/51/">
                    <p>資料をダウンロードする（無料）</p>
                </a>
            </div>
        </div>
    </div>
</div>
[wpmem_form register]
<?php get_template_part('includes/footer'); ?>