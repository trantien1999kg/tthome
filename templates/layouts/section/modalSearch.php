
<style>
    /* Search modal */
.modal-search.active{display: block;}
.modal-search{
    position:fixed;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.4);
    z-index: 99999;
    display:none;
}
.modal-search .content {
    width: 400px;
    position: relative;
}
.modal-search .close {
    display: block;
    color: #fff;
    position: absolute;
    width: 20px;
    height: 20px;
    right: 0px;
    top: -40px;
    cursor: pointer;
}

.box-search-desktop {
    max-width: 100%;
    display: flex;
}

.box-search-desktop input {
    width: 100%;
    height: 35px;
    padding: 0px 40px 0px 10px;
    background-color: #f2f2f2;
    border-radius: 5px;
    border: 1px solid var(--html-bg-website);
    color: #000;
}


.box-search-desktop input:focus-visible {
    outline: none;
}

.box-search-desktop input::placeholder { color: #888;font-weight: 500;font-style:italic;font-size: 13px;}

.box-search-desktop button {
    position: absolute;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px 10px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    right: 0;
    top: 0;
    height: 100%;
    background-color: black;
    color: #fff;
    font-weight: 600;
    font-size: 14px;
}

.box-search-desktop button:hover{ cursor:pointer;}
/* End Search modal */

span.times {
    display: block;
    width: 20px;
    height: 20px;
    position: relative;
    cursor: pointer;
}
span.times::after,span.times::before{
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 2px;
    transform:rotate(45deg);
    background-color: #fff;   
}
span.times.text-black::after,span.times.text-black::before{background-color: #000;}
span.times::after{transform:rotate(-45deg)}
</style>
<div id="modal-search" class="modal-search p-relative area-search">
    <div class="p-relative d-flex flex-wrap justify-content-center align-items-center"
        style="width:80vw;height:80vh;margin:auto;">
        <div class="content">
            <div class="box-search-desktop p-relative">
                <div onclick="_FRAMEWORK.toggle('#modal-search')" class="close"><span class="times"></span></div>
                <input type="text" name="search" id="keywords-f" placeholder="<?= _nhaptukhoatimkiem?>" data-input-search
                    data-target="desktop" autocomplete="off" />
                <button type="button" data-btn-search data-target="#keywords-f"><i class="fas fa-search"></i></button>
            </div>
            <div class="search" data-box="desktop">
            </div>
        </div>
    </div>
</div>