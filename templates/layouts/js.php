<script type="text/javascript">

    var _FRAMEWORK=_FRAMEWORK || {};

    var _ROOT = "<?=$https_config?>";

    var _TOC= "<?=$row_detail['mucluc']?>";

    var _PID= "<?=$row_detail['id']?>";

    var _LIST_TOC="<?=$row_toc?>";

    var _INDEX="<?=($source=='index') ? 'true' : 'false'?>";

    var _PLACEHOLDER = [ "Nhập vào thông tin cần tìm..." ];

    var PAGE_INDEX = <?= $row_setting['page_in']?>;

    var BlockCopy = <?= $row_setting['block_copy']?>

</script>

<?php
//gắn đường dẫn từ file javascrip vô đây

$js->setCache("cached");

$js->setJs("./assets/js/marquee.js");

$js->setJs("./assets/js/jsthanhxuan.js");

$js->setJs("./assets/js/functions.js");

$js->setJs("./assets/js/lang/$lang.js");

$js->setJs('./assets/plugins/mmenu/mmenu.js');

$js->setJs('./assets/plugins/wow/wow.min.js');

$js->setJs('./assets/plugins/Parallax/simpleParallax.min.js');

$js->setJs('./assets/plugins/chaychu/jquery.lettering.js');

$js->setJs('./assets/plugins/chaychu/jquery.textillate.js');

$js->setJs("./assets/js/main.js");

$js->setJs("./assets/js/vegas.js");

$js->setJs("./assets/js/index.js");


echo $js->getJs();

?>

 <script>

    var fired = false;

    window.addEventListener("scroll", function() {

        if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 &&

                fired === false)) {

            (function(d, s, id) {

                var js, fjs = d.getElementsByTagName(s)[0];

                if (d.getElementById(id)) return;

                js = d.createElement(s);

                js.id = id;

                js.src =

                    "https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=<?=$row_setting['facebook_id']?>&autoLogAppEvents=1";

                fjs.parentNode.insertBefore(js, fjs);

            }(document, 'script', 'facebook-jssdk'));

            fired = true;

        }

    }, true);

</script>

<?=htmlspecialchars_decode($row_setting['vchat'])?>

<address class="vcard hidden">

    <span class="org"><?=$row_setting['name_'.$lang]?></span>

    <span class="adr"><?=$row_setting['address_'.$lang]?></span>

    <span class="street-address"><?=$row_setting['address_'.$lang]?></span>

    <span class="locality"><?=$row_setting['map_marker']?></span>

    <span class="postal-code">700000</span>

    <span class="country-name">Việt Nam</span>

    <span class="tel"><?=$row_setting['dienthoai']?></span>

</address>