AOS.init({
    once: true
});
function myFunction() {
    var e = new Date().getFullYear();
    document.getElementById("year").innerHTML = e;
}
$(document).ready(function () {
    let e = $(".all-services-trigger"),
        s = $("#all-services-tab");
    const t = $(".big-services-trigger");
    let i = $("#single-service-section");
    const a = $(".small-services-trigger"),
        l = $(".single-service-tab");
    for (let r = 0; r < t.length; r++)
        $(t[r]).on("click", function () {
            let t = $(this).attr("data-target");
            $(e).removeClass("services-trigger-active"),
                $(s).addClass("all-services-hidden"),
                $(i).addClass("single-service-shown");
            for (let e = 0; e < l.length; e++)
                $(l[e]).hasClass("single-service-tab-visible") &&
                    $(l[e]).removeClass("single-service-tab-visible");
            $(t).addClass("single-service-tab-visible");
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
            for (let e = 0; e < l.length; e++)
                $(l[e]).hasClass("single-service-tab-visible") &&
                    $(l[e]).removeClass("single-service-tab-visible");
            for (let e = 0; e < a.length; e++)
                $(a[e]).hasClass("current-item-showing") &&
                    $(a[e]).removeClass("current-item-showing");
            $(e).addClass("single-service-tab-visible"),
                $(this).addClass("current-item-showing");
        });
    $(e).on("click", function () {
        let e = $(this).attr("data-target");
        for (let e = 0; e < l.length; e++)
            $(l[e]).hasClass("single-service-tab-visible") &&
                $(l[e]).removeClass("single-service-tab-visible");
        for (let e = 0; e < a.length; e++)
            $(a[e]).hasClass("current-item-showing") &&
                $(a[e]).removeClass("current-item-showing");
        $(i).removeClass("single-service-shown"),
            $(e).removeClass("all-services-hidden"),
            $(this).addClass("services-trigger-active");
    });
});
