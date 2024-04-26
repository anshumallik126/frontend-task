
function closeAlert() {
    var alert = document.getElementById("alert");
    alert.style.display = "none";
}
window.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (scrollPosition >= 100) {
        document.querySelector('.header').classList.add('onscroll');
    } else {
        document.querySelector('.header').classList.remove('onscroll');
    }
});

document.getElementById('menu-bar').addEventListener('click', function () {
    document.querySelector('.nav-wrapper').classList.add('toggle');
});

document.querySelector('.nav-wrapper .close').addEventListener('click', function () {
    document.querySelector('.nav-wrapper').classList.remove('toggle');
});


$('.home-slider .owl-carousel').owlCarousel({
    loop: false,
    autowidth: true,
    margin: 0,
    autoplay: true,
    mouseDrag: false,
    touchDrag: true,
    animateOut: 'fadeOut',
    items: 1,
    navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true,
        },
        600: {
            items: 1,
            nav: false,
            dots: true,
        },
        1000: {
            items: 1,
            nav: true,
            dots: true,
        }
    }
});

$('.mega_menu_item_right .owl-carousel').owlCarousel({
    loop: true,
    autoHeight: true,
    margin: 20,
    autoplay: true,
    autoplaySpeed: 3000,
    mouseDrag: true,
    touchDrag: true,
    items: 1,
    navText: ["<span class='fas fa-caret-left'></span>", "<span class='fas fa-caret-right'></span>"],
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 3,
            dots: false,
        },
        600: {
            items: 3, 
            dots: false,
        },
        1000: {
            items: 4,
            nav: true,
        }
    }
});


$('.product_category .owl-carousel').owlCarousel({
    loop: true,
    autoHeight: true,
    margin: 20,
    autoplay: true,
    autoplaySpeed: 3000,
    mouseDrag: true,
    touchDrag: true,
    items: 1,
    navText: ["<span class='fas fa-caret-left'></span>", "<span class='fas fa-caret-right'></span>"],
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 3,
            dots: false,
        },
        600: {
            items: 3,
            dots: false,
        },
        1000: {
            items: 4,
            nav: true,
        }
    }
});

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('tab-a')) {
        var tabId = event.target.getAttribute('data-id');
        document.querySelectorAll('.tab').forEach(function (tab) {
            tab.classList.remove('tab-active');
        });
        document.querySelector(".tab[data-id='" + tabId + "']").classList.add('tab-active');

        document.querySelectorAll('.tab-a').forEach(function (link) {
            link.classList.remove('active-a');
        });

        event.target.classList.add('active-a');
    }
});


function isSmallDevice() {
    return window.innerWidth <= 768;
}

if (isSmallDevice()) {
    var dropdowns = document.querySelectorAll(".has_dropdown");
    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("click", function () {
            var megaMenu = this.querySelector(".mega_menu");
            megaMenu.classList.toggle("menu-open");
            var content = document.getElementById("product_category");
            content.classList.toggle("hide");
        });
    });
}