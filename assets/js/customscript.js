
document.addEventListener('DOMContentLoaded', function () {

    // on scroll fixed navbar and scroll to top btn
    const navbar = document.getElementById('navbar');
    const scollTopBtn = document.getElementById('Scroll_top');

    window.addEventListener('scroll', () => {

        if (window.scrollY > 160) {
            navbar.classList.add('fixed');
            scollTopBtn.classList.add('show');
        } else {
            navbar.classList.remove('fixed');
            scollTopBtn.classList.remove('show');
        }

        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrolledPercent = (scrollTop / docHeight) * 100;

        // Update progress ring
        scollTopBtn.style.setProperty('--bg',
            `conic-gradient(var(--primary-color) ${scrolledPercent}%, #ccc ${scrolledPercent}%)`
        );

    });

    // Scroll to top when clicked
    scollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // show and hide search box on below lg screen 
    const searchBox = document.getElementById('searchBox');
    const searchToggleBtn = document.getElementById('searchToggleBtn');
    searchToggleBtn.addEventListener('click', (e) => {
        if (window.innerWidth < 992) {
            e.preventDefault();
            searchBox.classList.toggle('active');
        }
    })
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            searchBox.classList.remove('active');
        }
    });


    // show and hide dropdown on click 
    const dropdownBtns = document.querySelectorAll(".megaMenuLink");
    function isMobile() {
        return window.innerWidth < 992;
    }
    dropdownBtns.forEach(btn => {
        const parent = btn.closest(".mega_dropdown");
        const menu = parent.querySelector(".mega_menu");

        btn.addEventListener("click", function (e) {
            if (isMobile()) {
                e.preventDefault();

                // Close other open mega menus
                document.querySelectorAll(".mega_menu.show").forEach(openMenu => {
                    if (openMenu !== menu) openMenu.classList.remove("show");
                });

                // Toggle the current one
                menu.classList.toggle("show");
                btn.classList.toggle("rotate");
            }
        });
    });

    // close if clicking outside on mobile
    document.addEventListener("click", function (e) {
        // hide searchBox 
        if (
            window.innerWidth < 992 &&
            !searchBox.contains(e.target) &&
            !searchToggleBtn.contains(e.target)
        ) {
            searchBox.classList.remove('active');
        }
        // hide mega menu 
        if (
            isMobile() &&
            !e.target.closest(".mega_dropdown")
        ) {
            document.querySelectorAll(".mega_menu.show").forEach(openMenu => {
                openMenu.classList.remove("show");
            });
            document.querySelectorAll(".megaMenuLink.rotate").forEach(rotatedBtn => {
                rotatedBtn.classList.remove("rotate");
            });
        }

    });

    // get the current year
    const currentYear = new Date().getFullYear();
    document.getElementById('year').textContent = currentYear;


    const productDesFilterBtns = document.querySelectorAll('.indi_product_des_filter_btns button');
    const filteredContent = document.querySelectorAll('.product_filter_content .filter-content');
    productDesFilterBtns.forEach(btn => {

        btn.addEventListener('click', () => {
            productDesFilterBtns.forEach(button => button.classList.remove('active'));

            btn.classList.add('active');

            filteredContent.forEach(content => content.classList.remove('active'));

            const target = btn.getAttribute('data-target');
            document.querySelector(`.product_filter_content .filter-content.${target}`).classList.add('active');

        });
    });

    // change fill of wishlist 
    const whislistContainer = document.querySelectorAll('.wishlist_tag');
    whislistContainer.forEach(container => {
        container.addEventListener('click', () => {
            const icon = container.querySelector('i');

            icon.classList.toggle('ri-heart-line');
            icon.classList.toggle('ri-heart-fill');
        });
    });

    // color change 
    document.querySelectorAll('.color-tag').forEach(tag => {
        const color = tag.getAttribute('data-color');
        tag.style.backgroundColor = color;
    });

});

// JQuery 
$(function () {
    // video play magnificPopup 
    let video_play = $('.video_play_btn');
    if (video_play) {
        video_play.magnificPopup({
            type: 'iframe',
            preloader: true,
            removalDelay: 100,
            mainClass: 'mfp-fade'
        });
    }

    // slider  price range
    if ($("#slider-range").length) {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 1000,
            step: 1,
            values: [0, 1000],
            slide: function (event, ui) {
                $("#minPrice").text(ui.values[0]);
                $("#maxPrice").text(ui.values[1]);
            }
        });
    }
});



// Increment and decremament count on click in the individual product page 
const increase = () => {
    let numberBox = document.getElementById("numberBox");
    numberBox.value = parseInt(numberBox.value) + 1;
}

const decrease = () => {
    let numberBox = document.getElementById("numberBox");
    if (parseInt(numberBox.value) > 1) {
        numberBox.value = parseInt(numberBox.value) - 1;
    }
}

// swiper sliders 
var heroSlider = new Swiper(".heroSlider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    loop: true,
});

// product slider 
var ProductSlider = new Swiper(".ProductSlider", {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
});

// brand logo slider 
var brandLogo = new Swiper(".brandLogo", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
    speed: 5000,
    autoplay: { delay: 0, disableOnInteraction: false },
    freeMode: true,
    freeModeMomentum: true,
});

// individual product thumbs slider 
var IndividualProductSliderThumbs = new Swiper(".IndividualProductSliderThumbs", {
    spaceBetween: 16,
    slidesPerView: 2,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var IndividualProductSlider = new Swiper(".IndividualProductSlider", {
    spaceBetween: 10,
    thumbs: {
        swiper: IndividualProductSliderThumbs,
    },
});

// customer feedback slider 
var CustomerFeedbackSlider = new Swiper(".CustomerFeedbackSlider", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        550: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 20,
        },

    },
});


// GSAP ANIMATIONS
