//const { each } = require("jquery");

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
let floorTriggers = document.getElementById('floor-triggers');
let sliderRun = () => {
    $('#floor-triggers').slick({
        slidesToShow: 6,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    arrows: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                }
            }
        ]
    });
}


//Products page
prodPage = document.getElementById('products-page');
if (prodPage) {

    let firstMenu = document.getElementById('prod-floors-tab');
    let mainFloorsMenu = document.getElementById('main-floors-page');
    let mainTitle = document.getElementsByTagName('h1')[0];

    let bigBtns = document.getElementsByClassName('prod-floors-trigger');
    let smallBtns = document.getElementsByClassName('floor-trigger');
    if (window.location.hash) {
        let hashVal = window.location.hash.substr(1);
        for (let i = 0; i < bigBtns.length; i++) {
            let currentData = bigBtns[i].getAttribute('data-select');
            if (hashVal == currentData) {
                setTimeout(() => {
                    bigBtns[i].click();
                }, 100);
            }
            window.location.hash = '';
        }
    }
    for (let i = 0; i < bigBtns.length; i++) {
        bigBtns[i].addEventListener('click', function () {
            let selected = this.getAttribute('data-select');
            firstMenu.style.opacity = 0;
            mainFloorsMenu.style.opacity = 0;
            let selectedTitle = selected.charAt(0).toUpperCase() + selected.slice(1);
            mainTitle.innerHTML = selectedTitle;
            let selectFloorButtons = document.getElementsByClassName('floor-trigger');
            for (let i = 0; i < selectFloorButtons.length; i++) {
                let buttonData = selectFloorButtons[i].getAttribute('data-trigger-name');

                if (selected == buttonData) {
                    let triggersTab = selectFloorButtons[i].getAttribute('data-triggers');
                    document.getElementById(triggersTab).classList.add('tab-active');
                    selectFloorButtons[i].classList.add('floor-trigger-active');
                    break;
                }
            }
            setTimeout(() => {
                mainFloorsMenu.classList.remove('d-none');
                sliderRun();
                mainFloorsMenu.style.opacity = 1;
                firstMenu.classList.add('d-none');
            }, 300);
        })
    };
    for (let i = 0; i < smallBtns.length; i++) {
        smallBtns[i].addEventListener('click', function () {
            mainFloorsMenu.getElementsByClassName('tab-active')[0].classList.remove('tab-active');
            mainFloorsMenu.getElementsByClassName('floor-trigger-active')[0].classList.remove('floor-trigger-active');
            let thisTriggers = this.getAttribute('data-triggers');
            let dataName = this.getAttribute('data-trigger-name');
            let newTitle = dataName.charAt(0).toUpperCase() + dataName.slice(1);
            mainTitle.innerHTML = newTitle;
            setTimeout(() => {
                document.getElementById(thisTriggers).classList.add('tab-active');
                this.classList.add('floor-trigger-active');
            }, 300);
        })
    }
}
let mainMenuBtn = document.getElementById('main-menu-trigger');
let mainMenu = document.getElementById('mainMenu');
mainMenuBtn.addEventListener('click', function () {
    if (!this.classList.contains('menu-trigger-active')) {
        this.classList.add('menu-trigger-active');
        header.classList.add('mobile-menu-shown');
        mainMenu.classList.add('mainMenu-open');
    } else {
        this.classList.remove('menu-trigger-active');
        header.classList.remove('mobile-menu-shown');
        mainMenu.classList.remove('mainMenu-open');
    }
});
const qnaTriggers = document.getElementsByClassName('qna-trigger');
if (qnaTriggers.length > 0) {
    for (let i = 0; i < qnaTriggers.length; i++) {
        qnaTriggers[i].addEventListener('click', function () {
            let qnaP = qnaTriggers[i].nextElementSibling;
            if (qnaP.classList.contains('shown-qna')) {
                qnaP.classList.remove('shown-qna');
            } else {
                let currentQna = document.getElementsByClassName('shown-qna')[0];
                if (currentQna) {
                    currentQna.classList.remove('shown-qna');
                }
                qnaP.classList.add('shown-qna');
            }
        });
    }
}