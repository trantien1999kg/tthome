<section class="area-video thumb-box wow fadeInUp" data-wow-delay="0.5s"
    style=" text-align: center; position: relative;">

    <img src="<?=_upload_hinhanh_l.$videos['photo']?>" alt="" class="js-loadcover">
    <div class="icon-video">
        <div class="container">
            
            <a itemprop="url" class="qodef-m-play qodef-magnific-popup qodef-popup-item playBut"
                href="<?=$videos['links']?>" data-fancybox="videos">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="213.7px"
                    height="213.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">

                    <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="5" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10" points="
        73.5,62.5 148.5,105.8 73.5,149.1 " />

                    <circle class='circle' id="XMLID_17_" fill="none" stroke-width="5" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                </svg>
            </a>
        </div>
    </div>

</section>

<style>
.circle {
    stroke: white;
    stroke-dasharray: 650;
    stroke-dashoffset: 650;
    -webkit-transition: all 1s ease-in-out;
    opacity: 0.3;
}

.playBut {
    /*  border: 1px solid red;*/
    display: inline-block;
    -webkit-transition: all 0.5s ease;
}

.playBut .triangle {
    -webkit-transition: all 0.7s ease-in-out;
    stroke-dasharray: 240;
    stroke-dashoffset: 480;
    stroke: white;
    transform: translateY(0);
}

.playBut:hover .triangle {
    stroke-dashoffset: 0;
    opacity: 1;
    stroke: white;
    animation: nudge 0.7s ease-in-out;
}

@keyframes nudge {
    0% {
        transform: translateX(0);
    }

    30% {
        transform: translateX(-5px);
    }

    50% {
        transform: translateX(5px);
    }

    70% {
        transform: translateX(-2px);
    }

    100% {
        transform: translateX(0);
    }
}

.playBut:hover .circle {
    stroke-dashoffset: 0;
    opacity: 1;
}
</style>