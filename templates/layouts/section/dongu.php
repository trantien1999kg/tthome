<section class="dongu">
    <div class="container">
        <?php foreach($danhmuc1 as $key => $value){ ?>

        <div class="dongu-dongupijama-top">
            <button>
                <span>
                    <a href="san-pham/<?= $value['tenkhongdau']?>" >
                        <?= $value['ten']?>
                    </a>
                </span>
            </button>
        </div>
        <div id="cate<?= $key?>">
            <script>
            $(function() {
                _FRAMEWORK.loadTab("ajax/loadTab.php", {
                    com: "product",
                    list: <?= $value['id']?>,
                    tab: "#cate<?= $key?>"
                }, "#cate<?= $key?>");
            })
            </script>
        </div>
        <?php } ?>
    </div>
</section>