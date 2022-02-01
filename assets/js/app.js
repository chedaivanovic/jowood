AOS.init({
    once: true
});

let year = new Date().getFullYear();
document.getElementById("year").innerHTML = year;

$(document).ready(function () {
    let floorsHome = $('#floors-home');
    let e = $(".all-floors-trigger"),
        s = $("#all-floors-tab");
    const t = $(".big-floors-trigger");
    let i = $("#single-floor-section");
    const a = $(".small-floors-trigger"),
        l = $(".single-floor-tab");
    for (let r = 0; r < t.length; r++)
        $(t[r]).on("click", function () {
            $(floorsHome).addClass('floors-bg')
            let t = $(this).attr("data-target");
            let bg = $(this).attr("data-bg");
            let bgUrl = `assets/img/home-floors-bg/${bg}.jpg`;
            $(floorsHome).css('background-image', `url(${bgUrl})`);
            $(e).removeClass("floors-trigger-active"),
                $(s).addClass("all-floors-hidden"),
                $(i).addClass("single-floor-shown");
            for (let e = 0; e < l.length; e++)
                $(l[e]).hasClass("single-floor-tab-visible") &&
                    $(l[e]).removeClass("single-floor-tab-visible");
            $(t).addClass("single-floor-tab-visible");
            for (let e = 0; e < a.length; e++)
                $(a[e]).hasClass("current-item-showing") &&
                    $(a[e]).removeClass("current-item-showing");
            for (let e = 0; e < a.length; e++) {
                t === $(a[e]).attr("data-target") &&
                    $(a[e]).addClass("current-item-showing");
            }
        });
    for (let e = 0; e < a.length; e++)
        $(a[e]).on("click", function () {
            let e = $(this).attr("data-target");
            let bg = $(this).attr("data-bg");
            let bgUrl = `assets/img/home-floors-bg/${bg}.jpg`;
            $(floorsHome).css('background-image', `url(${bgUrl})`);
            for (let e = 0; e < l.length; e++)
                $(l[e]).hasClass("single-floor-tab-visible") &&
                    $(l[e]).removeClass("single-floor-tab-visible");
            for (let e = 0; e < a.length; e++)
                $(a[e]).hasClass("current-item-showing") &&
                    $(a[e]).removeClass("current-item-showing");
            $(e).addClass("single-floor-tab-visible"),
                $(this).addClass("current-item-showing");
        });
    $(e).on("click", function () {
        $(floorsHome).css('background-image', '');
        $(floorsHome).removeClass('floors-bg');
        let e = $(this).attr("data-target");
        for (let e = 0; e < l.length; e++)
            $(l[e]).hasClass("single-floor-tab-visible") &&
                $(l[e]).removeClass("single-floor-tab-visible");
        for (let e = 0; e < a.length; e++)
            $(a[e]).hasClass("current-item-showing") &&
                $(a[e]).removeClass("current-item-showing");
        $(i).removeClass("single-floor-shown"),
            $(e).removeClass("all-floors-hidden"),
            $(this).addClass("floors-trigger-active");

    });
});
window.onscroll = function () { myFunction() };

// Get the header
var header = document.getElementById("mainHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

var fileInput = document.querySelector(".input-file"),
    fileButton = document.querySelector(".input-file-trigger"),
    fileReturn = document.querySelector(".file-return");
if (fileButton) {
    fileButton.addEventListener("keydown", function (event) {
        if (event.keyCode == 13 || event.keyCode == 32) {
            fileInput.focus();
        }
    });
    fileButton.addEventListener("click", function (event) {
        fileInput.focus();
        return false;
    });
    fileInput.addEventListener("change", function (event) {
        fileReturn.innerHTML = this.value;
    });
}
$('.search-position-box').on('click', function () {
    let val = $(this).attr('data-search-count');

    $('#position').val(val).trigger('change');
})




lightbox.option({
    'resizeDuration': 0,
    'wrapAround': true
})


