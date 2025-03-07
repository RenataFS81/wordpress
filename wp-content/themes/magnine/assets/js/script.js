"use strict";
/*Namespace
------------------------------------------------------- */
var magnine = magnine || {};
/* Preloader
 **-----------------------------------------------------*/
magnine.PreLoader = {
    init: function () {
        let preloader = document.querySelector("#wpi-preloader");
        if (preloader) {
            preloader.classList.add("wpi-preloader-exit");
            setTimeout(function () {
                preloader.style.display = "none";
            }, 1000);
        }
    },
};
/* Display Clock
 **-----------------------------------------------------*/
magnine.currentClock = {
    init: function () {
        if (document.getElementsByClassName("wpi-display-clock").length > 0) {
            setInterval(function () {
                let currentTime = new Date();
                let hours = currentTime.getHours();
                let minutes = currentTime.getMinutes();
                let seconds = currentTime.getSeconds();
                let ampm = hours >= 12 ? "PM" : "AM";
                hours = hours % 12;
                hours = hours ? hours : 12;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                let timeString =
                    '<span class="theme-clock-unit clock-unit-hours">' +
                    hours +
                    "</span>" +
                    ":" +
                    '<span class="theme-clock-unit clock-unit-minute">' +
                    minutes +
                    "</span>" +
                    ":" +
                    '<span class="theme-clock-unit clock-unit-seconds">' +
                    seconds +
                    "</span>" +
                    " " +
                    '<span class="theme-clock-unit clock-unit-format">' +
                    ampm +
                    "</span>";
                document.getElementsByClassName(
                    "wpi-display-clock"
                )[0].innerHTML = timeString;
            }, 1000);
        }
    },
};
/* Slider
 **-----------------------------------------------------*/
magnine.slider = {
    init: function () {
        this.bannerSlider();
        this.popularSlider();
        this.widgetSlider();
        this.mustRead();
        this.articleGridSlider();
        this.articleGoupSlider();
    },
    bannerSlider: function () {
        let MainBanner = new Swiper(".site-banner-hero", {
            slidesPerView: "1",
            loop: true,
            spaceBetween: 24,
            direction: 'horizontal',
            speed: 800,
            autoplay: {
                delay: 5000, // Add a delay for autoplay (optional, you can adjust the timing)
            },
            navigation: {
                nextEl: ".banner-slider-next",
                prevEl: ".banner-slider-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
                1400: {
                    slidesPerView: 4,
                },
            },
        });
    },
    popularSlider: function () {
        let sliderWrapper = document.querySelector(
            ".wpi-popular-init"
        );
        if (sliderWrapper) {
            let sliderOptions;
            let sliderData = sliderWrapper.getAttribute("data-slider") || {};
            if (sliderData) {
                sliderOptions = JSON.parse(sliderData);
            }
            let swiper = new Swiper(sliderWrapper, sliderOptions);
        }
    },
    widgetSlider: function () {
        let sliderWrapper = document.querySelectorAll(
            ".wpi-swiper-init"
        );
        if (sliderWrapper) {
            sliderWrapper.forEach(function (item) {
                let parentWrapper = item.parentNode;
                let navNext = parentWrapper.querySelector(
                    ".widget-slider-next"
                );
                let navPrev = parentWrapper.querySelector(
                    ".widget-slider-prev"
                );
                let paginate =
                    parentWrapper.querySelector(".wpi-widget-pagination");
                let defaultOptions = {
                    slidesPerView: 1,
                    loop: true,
                    lazyloading: true,
                    navigation: {
                        nextEl: navNext,
                        prevEl: navPrev,
                    },
                    pagination: {
                        el: paginate,
                        clickable: true,
                    },
                };
                let data = item.getAttribute("data-slider") || {};
                if (data) {
                    var dataOptions = JSON.parse(data);
                }
                let sliderOptions = {
                    ...defaultOptions,
                    ...dataOptions,
                };
                let swiper = new Swiper(item, sliderOptions);
                let containerWidth = item.clientWidth;
                if (containerWidth < 500) {
                    swiper.params.slidesPerView = 1;
                    swiper.update();
                }
            });
        }
    },
    mustRead: function () {
        let mustRead = new Swiper(".mustread-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    },
    articleGridSlider: function () {
        let articleGridSlider = new Swiper(".article-grid-slider", {
            slidesPerView: "1",
            loop: true,
            spaceBetween: 24,
            direction: 'horizontal',
            speed: 900,
            autoplay: {
                delay: 6748, // Add a delay for autoplay (optional, you can adjust the timing)
            },
            navigation: {
                nextEl: ".article-grid-slider-next",
                prevEl: ".article-grid-slider-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    },
    articleGoupSlider: function () {
        let articleGridSlider = new Swiper(".article-group-slider", {
            slidesPerView: "1",
            loop: true,
            spaceBetween: 24,
            speed: 900,
            autoplay: {
                delay: 8778, // Add a delay for autoplay (optional, you can adjust the timing)
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    },
};
/* Background Image
 **-----------------------------------------------------*/
magnine.setBackgroundImage = {
    init: function () {
        let bgImageContainer = document.querySelectorAll(".entry-background-image");
        if (bgImageContainer) {
            bgImageContainer.forEach(function (item) {
                let image = item.querySelector("img");
                if (image) {
                    let imageSrc = image.getAttribute("src");
                    if (imageSrc) {
                        item.style.backgroundImage = "url(" + imageSrc + ")";
                        image.style.display = "none";
                    }
                }
            });
        }
        let pageSections = document.querySelectorAll(".data-bg");
        pageSections.forEach(function (section) {
            let background = section.getAttribute("data-background");
            if (background) {
                section.style.backgroundImage = "url(" + background + ")";
            }
        });
    },
};
/* Title Marquee
 **-----------------------------------------------------*/
magnine.titleMarquee = {
    init: function () {
        let marqueeWrappers = document.querySelectorAll(".is-marquee");
        if (marqueeWrappers.length > 0) {
            // Function to duplicate marquee content
            function duplicateMarqueeContent(wrapper, times) {
                const originalContent = wrapper.innerHTML.trim();
                let newContent = '';
                for (let i = 0; i < times; i++) {
                    newContent += originalContent;
                }
                wrapper.innerHTML = newContent;
            }

            // Iterate through all marquee wrappers and apply duplication
            marqueeWrappers.forEach(wrapper => {
                duplicateMarqueeContent(wrapper, 4);
            });
        }
    },
};
/* Display Clock
 **-----------------------------------------------------*/
magnine.displayClock = {
    init: function () {
        if (document.getElementsByClassName("wpi-current-time").length > 0) {
            setInterval(function () {
                let currentTime = new Date();
                let hours = currentTime.getHours();
                let minutes = currentTime.getMinutes();
                let seconds = currentTime.getSeconds();
                let ampm = hours >= 12 ? "PM" : "AM";
                hours = hours % 12;
                hours = hours ? hours : 12;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                let timeString =
                    '<span class="wpi-clock-unit clock-unit-hours">' +
                    hours +
                    "</span>" +
                    ":" +
                    '<span class="wpi-clock-unit clock-unit-minute">' +
                    minutes +
                    "</span>" +
                    ":" +
                    '<span class="wpi-clock-unit clock-unit-seconds">' +
                    seconds +
                    "</span>" +
                    " " +
                    '<span class="wpi-clock-unit clock-unit-format">' +
                    ampm +
                    "</span>";
                document.getElementsByClassName(
                    "wpi-current-time"
                )[0].innerHTML = timeString;
            }, 1000);
        }
    },
};
/* Preloader
 **-----------------------------------------------------*/
magnine.ProgressBar = {
    init: function () {
        const progressBar = document.getElementById('progressBar');
        // Check if progressBar exists before proceeding
        if (progressBar) {
            const totalHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPosition = window.scrollY;
            const scrollPercentage = (scrollPosition / totalHeight) * 100;
            progressBar.style.width = scrollPercentage + '%';
            // Update progress on scroll
            window.addEventListener('scroll', function () {
                const scrollPosition = window.scrollY;
                const scrollPercentage = (scrollPosition / totalHeight) * 100;
                progressBar.style.width = scrollPercentage + '%';
            });
        }
    },
};
/* Offcanvas Drawer
 **-----------------------------------------------------*/
magnine.offcanvasDrawer = {
    init: function () {
        const siteDrawerMenuIcon = document.querySelector('.site-drawer-menu-icon');
        const siteDrawerOffcanvas = document.querySelector('.site-drawer-offcanvas');
        const siteDrawerCloseBtn = document.querySelector('.site-drawer-close-btn');
        const siteDrawerOverlay = document.querySelector('.site-drawer-overlay');
        const siteDrawerFocusableElements = '.site-drawer-close-btn, .site-drawer-offcanvas a';
        let siteDrawerFirstFocusableElement;
        let siteDrawerFocusableContent;
        let siteDrawerLastFocusableElement;
        if (siteDrawerMenuIcon) {
            siteDrawerMenuIcon.addEventListener('click', () => siteDrawerToggleOffcanvas(true));
            siteDrawerMenuIcon.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    siteDrawerToggleOffcanvas(true);
                }
            });
        }

        function siteDrawerToggleOffcanvas(show) {
            const isVisible = show !== undefined ? show : !siteDrawerOffcanvas.classList.contains('show');
            if (isVisible) {
                siteDrawerOffcanvas.classList.add('show');
                siteDrawerOverlay.classList.add('show');
                document.body.classList.add('offcanvas-drawer-active');
                siteDrawerOffcanvas.setAttribute('aria-hidden', 'false');
                siteDrawerFirstFocusableElement = siteDrawerOffcanvas.querySelectorAll(siteDrawerFocusableElements)[0];
                siteDrawerFocusableContent = siteDrawerOffcanvas.querySelectorAll(siteDrawerFocusableElements);
                siteDrawerLastFocusableElement = siteDrawerFocusableContent[siteDrawerFocusableContent.length - 1];
                siteDrawerFirstFocusableElement.focus();
            } else {
                siteDrawerOffcanvas.classList.remove('show');
                siteDrawerOverlay.classList.remove('show');
                document.body.classList.remove('offcanvas-drawer-active');
                siteDrawerOffcanvas.setAttribute('aria-hidden', 'true');
                if (siteDrawerMenuIcon) {
                    siteDrawerMenuIcon.focus();
                }
            }
        }

        function siteDrawerHandleKeydown(e) {
            if (!siteDrawerOffcanvas.classList.contains('show')) return;
            const isTabPressed = e.key === 'Tab';
            if (!isTabPressed) return;
            if (e.shiftKey) {
                if (document.activeElement === siteDrawerFirstFocusableElement) {
                    e.preventDefault();
                    siteDrawerLastFocusableElement.focus();
                }
            } else {
                if (document.activeElement === siteDrawerLastFocusableElement) {
                    e.preventDefault();
                    siteDrawerFirstFocusableElement.focus();
                }
            }
        }

        siteDrawerCloseBtn.addEventListener('click', () => siteDrawerToggleOffcanvas(false));
        siteDrawerCloseBtn.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                siteDrawerToggleOffcanvas(false);
            }
        });
        siteDrawerOverlay.addEventListener('click', () => siteDrawerToggleOffcanvas(false));
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') siteDrawerToggleOffcanvas(false);
            siteDrawerHandleKeydown(e);
        });
    },
};
/* Sticky Header
 **-----------------------------------------------------*/
magnine.stickyHeader = {
    init: function () {
        let navBar = document.querySelector(".site-header-responsive");
        let parentHeader = document.querySelector(".site-header");
        // Handle sticky menu on scroll
        if (navBar && navBar.classList.contains("has-sticky-navigation") && parentHeader) {
            this.stickMenuOnScroll(navBar, parentHeader);
        }
    },
    stickMenuOnScroll: function (navBar, parentHeader) {
        window.addEventListener("scroll", function (event) {
            let parentHeaderHeight = parentHeader.offsetHeight;
            let currentScrollPos = window.pageYOffset;
            if (currentScrollPos < parentHeaderHeight || currentScrollPos === 0) {
                navBar.classList.remove("sticky-header-active");
            } else {
                navBar.classList.add("sticky-header-active");
            }
        });
    },
};
/* Scroll-to-Top Button with Progress Indicator
 **-----------------------------------------------------*/
magnine.scrollToTop = {
    init: function () {
        this.scrollToTopBtn = document.getElementById("scrollToTopBtn");
        if (!this.scrollToTopBtn) return; // Exit if the button does not exist
        this.progressCircle = document.getElementById("progressCircle");
        if (!this.progressCircle) return; // Exit if the progress circle does not exist
        this.progressCircle = this.progressCircle.querySelector("circle");
        if (!this.progressCircle) return; // Exit if the circle element does not exist
        this.radius = this.progressCircle.r.baseVal.value;
        this.circumference = 2 * Math.PI * this.radius;
        this.progressCircle.style.strokeDasharray = `${this.circumference} ${this.circumference}`;
        this.progressCircle.style.strokeDashoffset = this.circumference;
        // Bind the scroll and click events
        window.addEventListener('scroll', this.handleScroll.bind(this));
        this.scrollToTopBtn.addEventListener('click', this.scrollToTop.bind(this));
    },
    handleScroll: function () {
        if (!this.scrollToTopBtn || !this.progressCircle) return; // Exit if elements are missing
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            this.scrollToTopBtn.style.display = "flex";
        } else {
            this.scrollToTopBtn.style.display = "none";
        }
        requestAnimationFrame(this.updateProgressIndicator.bind(this));
    },
    scrollToTop: function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    },
    updateProgressIndicator: function () {
        if (!this.progressCircle) return; // Exit if the circle element does not exist
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const progress = scrollTop / scrollHeight;
        const dashOffset = this.circumference * (1 - progress);
        this.progressCircle.style.strokeDashoffset = dashOffset;
    }
};
magnine.tabbedWidget = {
    init: function () {
        const widgetContainers = document.querySelectorAll(".wpi-tabbed-widget");
        widgetContainers.forEach((container) => {
            const tabs = container.querySelectorAll(
                ".tabbed-widget-header .tabbed-header-item"
            );
            const tabPanes = container.querySelectorAll(
                ".tabbed-widget-content .tabbed-content-item"
            );
            tabs.forEach((tab) => {
                tab.addEventListener("click", function (event) {
                    const tabid = this.getAttribute("tab-data");
                    tabs.forEach((tab) => tab.classList.remove("active"));
                    tabPanes.forEach((tabPane) =>
                        tabPane.classList.remove("active")
                    );
                    this.classList.add("active");
                    container
                        .querySelector(`.content-${tabid}`)
                        .classList.add("active");
                });
            });
        });
    },
};

/* Load functions at proper events
 *--------------------------------------------------*/
/**
 * Is the DOM ready?
 *
 * This implementation is coming from https://gomakethings.com/a-native-javascript-equivalent-of-jquerys-ready-method/
 *
 * @param {Function} fn Callback function to run.
 */
function magnineDomReady(fn) {
    if (typeof fn !== "function") {
        return;
    }
    if (
        document.readyState === "interactive" ||
        document.readyState === "complete"
    ) {
        return fn();
    }
    document.addEventListener("DOMContentLoaded", fn, false);
}

magnineDomReady(function () {
    magnine.currentClock.init();
    magnine.slider.init();
    magnine.setBackgroundImage.init();
    magnine.titleMarquee.init();
    magnine.displayClock.init();
    magnine.offcanvasDrawer.init();
    magnine.stickyHeader.init();
    magnine.scrollToTop.init();
    magnine.tabbedWidget.init();
});
window.addEventListener("load", function (event) {
    magnine.PreLoader.init();
});
window.addEventListener("scroll", function (event) {
    magnine.ProgressBar.init();
});
(function () {
    const section = 'wpi-ticker-init';
    const sliders = document.querySelectorAll(`.${section}`);
    if (sliders.length === 0) {
        return;
    }
    const initSwiper = function () {
        sliders.forEach(slider => {
            const speedValue = slider.getAttribute('data-news-ticker-speed');
            const wrapperClass = `${section}-wrapper`;
            const slideClass = `${section}-item`;
            const speed = !isNaN(parseInt(speedValue)) ? parseInt(speedValue) : 8000;
            const swiperInstance = new Swiper(slider, {
                wrapperClass: wrapperClass,
                slideClass: slideClass,
                scrollbar: false,
                direction: 'horizontal',
                slidesPerView: 'auto',
                speed: speed,
                initialSlide: 0,
                loop: true,
                parallax: false,
                spaceBetween: 0,
                allowTouchMove: false,
                waitForTransition: false,
                watchSlidesProgress: false,
                autoplay: {delay: 0, disableOnInteraction: false,},
            });
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) {
                        swiperInstance.autoplay.stop();
                    } else {
                        swiperInstance.autoplay.start();
                    }
                });
            }, {threshold: 0});
            observer.observe(slider);
        });
    };
    document.addEventListener('DOMContentLoaded', () => {
        initSwiper();
    });
})();
document.addEventListener("DOMContentLoaded", function () {
    // Select the elements
    const bannerSection = document.querySelector('.wpi-frontline-beginning');
    const fixedAside = document.querySelector('.wpi-fixed-aside');
    if (bannerSection && fixedAside) {
        // Calculate the initial offset from the top of the page to `.wpi-frontline-beginning`
        const bannerOffsetFromTop = bannerSection.getBoundingClientRect().top + window.scrollY;
        // Set the initial top offset for `.wpi-fixed-aside`
        fixedAside.style.top = `${bannerOffsetFromTop}px`;
        const updateOffsetAndTransform = () => {
            // Recalculate the offset value dynamically
            const updatedBannerOffset = bannerSection.getBoundingClientRect().top + window.scrollY;
            const currentScroll = window.scrollY;
            // Update the top value
            fixedAside.style.top = `${updatedBannerOffset}px`;
            // Adjust translateY value dynamically with negative value
            if (currentScroll > updatedBannerOffset) {
                const translateYValue = -(updatedBannerOffset - 100); // Negative translate value
                fixedAside.style.transform = `translateY(${translateYValue}px)`;
            } else {
                // Reset transform when back at the top
                fixedAside.style.transform = `translateY(0px)`;
            }
        };
        // Listen for scroll and resize events
        window.addEventListener('scroll', updateOffsetAndTransform);
        window.addEventListener('resize', updateOffsetAndTransform);
    }
});