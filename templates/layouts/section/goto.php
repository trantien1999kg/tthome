<script>
$(document).ready(function() {
    "use strict";
    var progressPath = document.querySelector('.i-progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function() {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > offset) {
            $('.i-progress-wrap').addClass('i-active-progress');
        } else {
            $('.i-progress-wrap').removeClass('i-active-progress');
        }
    });
    $('.i-progress-wrap').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    });
});
</script>
<style>
.i-progress-wrap {
    position: fixed;
    bottom: 70px;
    right: 8px;
    height: 40px;
    width: 40px;
    cursor: pointer;
    display: block;
    border-radius: 50px;
    z-index: 1001010;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
    -webkit-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    transition: all 400ms linear;
}

.i-progress-wrap::after {
    position: absolute;
    font-family: 'Font Awesome 5 Free';
    content: '\f062';
    text-align: center;
    line-height: 40px;
    font-size: 16px;
    font-weight: 900;
    color: var(--html-bg-website);
    left: 0;
    top: 0;
    height: 40px;
    width: 40px;
    cursor: pointer;
    display: block;
    z-index: 1;
    -webkit-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    transition: all 400ms linear;
}

.i-progress-wrap.i-active-progress {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
}

.i-progress-wrap svg path {
    fill: none;
}

.i-progress-wrap svg.progress-circle path {
    stroke: var(--html-bg-website);
    stroke-width: 4;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    transition: all 400ms linear;
}
</style>
<div class="i-progress-wrap i-cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>