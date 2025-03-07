"use strict";

/*Namespace
------------------------------------------------------- */

var magty = magty || {};

/* Handle Accessiblity for Menu Items
 **-----------------------------------------------------*/
magty.traverseMenu = {
    init: function () {
        let topNavigation = document.querySelector(".magty-top-nav");
        let primaryNavigation = document.getElementById("site-navigation");

        // For top menu navigation
        if (topNavigation) {
            this.traverse(topNavigation);
        }
        // For primary menu navigation
        if (primaryNavigation) {
            this.traverse(primaryNavigation);
        }
    },

    traverse: function (navigation) {
        let menu = navigation.getElementsByTagName("ul")[0];
        if ("undefined" !== typeof menu) {
            if (!menu.classList.contains("nav-menu")) {
                menu.classList.add("nav-menu");
            }
            // Get all the link elements within the menu.
            let links = menu.getElementsByTagName("a");

            // Get all the link elements with children within the menu.
            let linksWithChildren = menu.querySelectorAll(
                ".menu-item-has-children > a, .page_item_has_children > a"
            );

            // Toggle focus each time a menu link is focused or blurred.
            for (let link of links) {
                link.addEventListener("focus", this.toggleFocus, true);
                link.addEventListener("blur", this.toggleFocus, true);
            }

            // Toggle focus each time a menu link with children receive a touch event.
            for (let link of linksWithChildren) {
                link.addEventListener("touchstart", this.toggleFocus, false);
            }
        }
    },

    toggleFocus: function (event) {
        if (event.type === "focus" || event.type === "blur") {
            let self = this;
            // Move up through the ancestors of the current link until we hit .nav-menu.
            while (!self.classList.contains("nav-menu")) {
                // On li elements toggle the class .focus.
                if ("li" === self.tagName.toLowerCase()) {
                    self.classList.toggle("focus");
                }
                self = self.parentNode;
            }
        }

        if (event.type === "touchstart") {
            let menuItem = this.parentNode;
            event.preventDefault();
            for (let link of menuItem.parentNode.children) {
                if (menuItem !== link) {
                    link.classList.remove("focus");
                }
            }
            menuItem.classList.toggle("focus");
        }
    },
};

/* Handle Focus for Dialog Accessiblity
 **-----------------------------------------------------*/
magty.handleFocus = {
    init: function () {
        this.keepFocusInModal();
    },

    keepFocusInModal: function () {
        let modal = document.querySelectorAll(".magty-canvas-modal");

        document.addEventListener("keydown", function (event) {
            // Check for if tab key is pressed
            let KEYCODE_TAB = 9;
            let isTabPressed =
                event.key === "Tab" || event.keyCode === KEYCODE_TAB;
            if (!isTabPressed) {
                return;
            }

            if (modal) {
                modal.forEach(function (element) {
                    let focusableEls = element.querySelectorAll(
                        'a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="text"]:not([disabled]), input[type="search"]:not([disabled]), input[type="submit"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])'
                    );

                    let firstFocusableEl = focusableEls[0];
                    let lastFocusableEl = focusableEls[focusableEls.length - 1];

                    // if shift key pressed for shift + tab combination
                    if (event.shiftKey) {
                        if (document.activeElement === firstFocusableEl) {
                            lastFocusableEl.focus(); // add focus for the last focusable element
                            event.preventDefault();
                        }
                    } else {
                        // if tab key is pressed
                        if (document.activeElement === lastFocusableEl) {
                            // if focused has reached to last focusable element then focus first focusable element after pressing tab
                            firstFocusableEl.focus(); // add focus for the first focusable element
                            event.preventDefault();
                        }
                    }
                });
            }
        });
    },
};

/* Preloader
 **-----------------------------------------------------*/
magty.fadeOutPreloader = {
    init: function () {
        let preloader = document.querySelector("#magty-preloader-wrapper");
        if (preloader) {
            preloader.classList.add("fadeOut");
            setTimeout(function () {
                preloader.style.display = "none";
            }, 500);
        }
    },
};

/* Scroll to top
 **-----------------------------------------------------*/
magty.scrollToTop = {
    init: function () {
        let rootElement = document.documentElement;
        let _this = this;

        // Scroll to top on click
        let scrollToTopBtn = document.querySelectorAll(
            ".magty-toggle-scroll-top"
        );
        if (scrollToTopBtn) {
            scrollToTopBtn.forEach(function (item) {
                _this.goToTop(item, rootElement);
            });
        }

        // Display Floating Button
        let floatingScrollTopBtn = document.querySelectorAll(
            ".magty-floating-scroll-top"
        );
        if (floatingScrollTopBtn) {
            floatingScrollTopBtn.forEach(function (item) {
                _this.scrollToTopPosition(item, rootElement);
            });
        }
    },

    goToTop: function (scrollToTopBtn, rootElement) {
        scrollToTopBtn.addEventListener("click", function (elem) {
            elem.preventDefault();
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    },

    scrollToTopPosition: function (scrollToTopBtn, rootElement) {
        window.addEventListener("scroll", function (event) {
            let scrollTotal =
                rootElement.scrollHeight - rootElement.clientHeight;
            // Show on certain window height
            if (rootElement.scrollTop / scrollTotal > 0.4) {
                scrollToTopBtn.classList.add("visible");
            } else {
                scrollToTopBtn.classList.remove("visible");
            }
        });
    },
};

/* Sticky Menu
 **-----------------------------------------------------*/
magty.stickyMenu = {
    init: function () {
        const stickyElement = document.querySelector(
            ".magty-primary-bar-row.sticky-menu"
        );
        if (stickyElement) {
            if (stickyElement.className.includes("sticky-style-normal")) {
                let stickyPoint =
                    stickyElement.offsetTop + stickyElement.clientHeight + 100;

                window.addEventListener("scroll", function (event) {
                    let currentScroll = window.scrollY;
                    if (
                        currentScroll <= stickyElement.offsetTop ||
                        currentScroll === 0
                    ) {
                        stickyElement.classList.remove("has-menu-sticked");
                        stickyElement.classList.remove(
                            "sticky-menu-translate-up"
                        );
                        return;
                    }
                    if (currentScroll > stickyElement.offsetTop) {
                        stickyElement.classList.add("sticky-menu-translate-up");
                        stickyElement.classList.remove("has-menu-sticked");
                    }
                    if (currentScroll > stickyPoint) {
                        stickyElement.classList.remove(
                            "sticky-menu-translate-up"
                        );
                        stickyElement.classList.add("has-menu-sticked");
                    }
                });
            }
        }
    },
};

/* Sub Menu Toggles
 **-----------------------------------------------------*/
magty.subMenuToggle = {
    init: function () {
        const toggleItems = document.querySelectorAll(".sub-menu-toggle");
        if (toggleItems) {
            toggleItems.forEach(function (item) {
                item.addEventListener("click", function (e) {
                    e.preventDefault();
                    this.classList.toggle("active");
                    this.setAttribute(
                        "aria-selected",
                        `${!(this.getAttribute("aria-selected") === "true")}`
                    );
                    let currentClass = this.getAttribute("data-toggle-target");
                    if (currentClass) {
                        document
                            .querySelector(currentClass)
                            .classList.toggle("active");
                    }
                });
            });
        }
    },
};

/* Canvas Modal
 **-----------------------------------------------------*/
magty.CanvasModal = {
    init: function () {
        if (document.querySelector(".toggle-canvas-modal")) {
            // Handle canvas modal when opened
            this.onOpen();
            // Handle canvas modal when closed
            this.onClose();
            // When open, close if visitor clicks on the wrapping element of the modal.
            this.outsideModal();
            // Close on escape key press.
            this.closeOnEscape();
        }
    },

    onOpen: function () {
        document
            .querySelectorAll(".toggle-canvas-modal")
            .forEach(function (element) {
                element.addEventListener("click", function (event) {
                    event.preventDefault();
                    document.body.classList.add("canvas-modal-is-open");
                    document.body.classList.add(
                        this.getAttribute("data-body-class")
                    );
                    element.classList.add("active");
                    element.setAttribute("aria-expanded", true);
                    let focusElement = this.getAttribute("data-focus");
                    if (focusElement) {
                        setTimeout(function () {
                            document.querySelector(focusElement).focus();
                        }, 500);
                    }
                });
            });
    },

    onClose: function () {
        document.querySelectorAll(".close-canvas-modal").forEach(
            function (element) {
                element.addEventListener(
                    "click",
                    function (event) {
                        event.preventDefault();
                        this.hideModal();
                    }.bind(this)
                );
            }.bind(this)
        );
    },

    outsideModal: function () {
        document.addEventListener(
            "click",
            function (event) {
                if (document.body.classList.contains("canvas-modal-is-open")) {
                    let overlayDiv = document.querySelector("#page.site");
                    if (event.target == overlayDiv) {
                        this.hideModal();
                    }
                }
            }.bind(this)
        );
    },

    closeOnEscape: function () {
        document.addEventListener(
            "keydown",
            function (event) {
                if (event.key === "Escape") {
                    event.preventDefault();
                    this.hideModal();
                }
            }.bind(this)
        );
    },

    hideModal: function () {
        document.body.classList.remove("canvas-modal-is-open");
        let activeItem = document.querySelector(".toggle-canvas-modal.active");
        if (activeItem) {
            document.body.classList.remove(
                activeItem.getAttribute("data-body-class")
            );
            let focusElement = activeItem.getAttribute("data-focus");
            if (focusElement) {
                document.querySelector(focusElement).blur();
            }
            activeItem.setAttribute("aria-expanded", false);
            activeItem.focus();
            activeItem.classList.remove("active");
        }
    },
};

/* Search Toggle
 **-----------------------------------------------------*/
magty.SearchBlock = {
    isToggled: false,

    init: function () {
        if (document.querySelector(".toggle-search-block")) {
            this.toggleSearchBlock();
            this.closeOnEscape();
        }
    },

    toggleSearchBlock: function () {
        const self = this;
        document
            .querySelectorAll(".toggle-search-block")
            .forEach(function (element) {
                element.addEventListener("click", function (event) {
                    event.preventDefault();
                    self.isToggled = !self.isToggled;
                    if (self.isToggled) {
                        document.body.classList.add("search-block-is-open");
                        document.body.classList.add(
                            this.getAttribute("data-body-class")
                        );
                        element.classList.add("active");
                        element.parentNode.classList.add("active");
                        element.setAttribute("aria-expanded", true);
                        let focusElement = this.getAttribute("data-focus");
                        if (focusElement) {
                            setTimeout(function () {
                                element.parentNode
                                    .querySelector(focusElement)
                                    .focus();
                            }, 500);
                        }
                        setTimeout(function () {
                            self.outsideBlock();
                        }, 100);
                    } else {
                        self.hideBlock();
                    }
                });
            });
    },

    closeOnEscape: function () {
        const self = this;
        document.addEventListener("keydown", function (event) {
            if (event.key === "Escape") {
                event.preventDefault();
                self.hideBlock();
            }
        });
    },

    outsideBlock: function () {
        const self = this;
        document.addEventListener("click", self.handleClickOutsideBox);
    },

    handleClickOutsideBox: function (event) {
        const self = this;
        if (document.body.classList.contains("search-block-is-open")) {
            let targetDiv = document.querySelector(
                ".magty-search-toggle.active .em-search-form-inner"
            );
            if (!targetDiv.contains(event.target)) {
                magty.SearchBlock.hideBlock();
            }
        }
    },

    hideBlock: function () {
        const self = this;
        document.body.classList.remove("search-block-is-open");
        let activeItem = document.querySelector(".toggle-search-block.active");
        if (activeItem) {
            document.body.classList.remove(
                activeItem.getAttribute("data-body-class")
            );
            let focusElement = activeItem.getAttribute("data-focus");
            if (focusElement) {
                activeItem.parentNode.querySelector(focusElement).blur();
            }
            activeItem.setAttribute("aria-expanded", false);
            activeItem.focus();
            activeItem.classList.remove("active");
            activeItem.parentNode.classList.remove("active");
            document.removeEventListener("click", self.handleClickOutsideBox);
            self.isToggled = false;
        }
    },
};

/* Background Image
 **-----------------------------------------------------*/
magty.setBackgroundImage = {
    init: function () {
        let bgImageContainer = document.querySelectorAll(".magty-bg-image");
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
    },
};

/* Progress Bar
 **-----------------------------------------------------*/
magty.progressBar = {
    init: function () {
        let progressBarDiv = document.getElementById("magty-progress-bar");

        if (progressBarDiv) {
            let body = document.body;
            let rootElement = document.documentElement;

            window.addEventListener("scroll", function (event) {
                let winScroll = body.scrollTop || rootElement.scrollTop;
                let height =
                    rootElement.scrollHeight - rootElement.clientHeight;
                let scrolled = (winScroll / height) * 100;
                progressBarDiv.style.width = scrolled + "%";
            });
        }
    },
};

/* Slider
 **-----------------------------------------------------*/
magty.slider = {
    init: function () {
        this.tickerSlider();
        this.bannerSlider();
        this.widgetSlider();
    },
    tickerSlider: function () {
        let sliderWrapper = document.querySelector(
            ".magty-ticker-slider-wrapper"
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
    bannerSlider: function () {
        let sliderWrapper = document.querySelector(".magty-banner-wrapper");
        if (sliderWrapper) {
            let bannerDefaultOptions = {
                loop: true,
            };

            let bannerDataOptions;

            // Setup Banner.
            let bannerData = sliderWrapper.getAttribute("data-banner") || {};
            if (bannerData) {
                bannerDataOptions = JSON.parse(bannerData);
            }
            let sliderOptions = {
                ...bannerDefaultOptions,
                ...bannerDataOptions,
            };
            let swiper = new Swiper(sliderWrapper, sliderOptions);
        }
    },
    widgetSlider: function () {
        let sliderWrapper = document.querySelectorAll(
            ".magty-slider-wrapper-block .swiper"
        );
        if (sliderWrapper) {
            sliderWrapper.forEach(function (item) {
                let parentWrapper = item.parentNode;
                let navNext = parentWrapper.querySelector(
                    ".swiper-button-next"
                );
                let navPrev = parentWrapper.querySelector(
                    ".swiper-button-prev"
                );
                let paginate =
                    parentWrapper.querySelector(".swiper-pagination");
                let defaultOptions = {
                    slidesPerView: 1,
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
};

/* Tabs
 **-----------------------------------------------------*/
magty.tabs = {
    init: function () {
        let tabLinks = document.querySelectorAll("[data-toggle='uf-tab']");
        if (tabLinks) {
            tabLinks.forEach(function (tabLink) {
                tabLink.addEventListener("click", function (e) {
                    e.preventDefault();
                    let tabHeadings = [...tabLink.parentNode.children];
                    let tabContents = [
                        ...tabLink.parentNode.nextElementSibling.children,
                    ];
                    tabHeadings.forEach((tabLink) => {
                        tabLink.classList.remove("active");
                        tabLink.setAttribute("aria-selected", "false");
                    });
                    tabContents.forEach((tabContent) => {
                        tabContent.classList.remove("active");
                    });
                    let selectedTabId = tabLink.getAttribute("aria-controls");
                    let selectedContentTab =
                        document.getElementById(selectedTabId);
                    tabLink.classList.add("active");
                    tabLink.setAttribute("aria-selected", "true");
                    selectedContentTab.classList.add("active");
                });
            });
        }
    },
};

/* Display Time
 **-----------------------------------------------------*/
magty.displayTime = {
    init: function () {
        let activeTimeComponent = document.querySelector(
            ".magty-components-time"
        );
        if (activeTimeComponent) {
            let dataSettings =
                activeTimeComponent.getAttribute("data-settings");
            let timeSettings = JSON.parse(dataSettings);
            if (timeSettings) {
                let viewerTimeZone =
                    Intl.DateTimeFormat().resolvedOptions().timeZone;
                timeSettings.timeZone = viewerTimeZone;

                setInterval(function () {
                    var viewerTime = new Date();
                    var formattedTime = viewerTime.toLocaleTimeString(
                        "en-US",
                        timeSettings
                    );
                    activeTimeComponent.innerHTML = formattedTime;
                }, 1000);
            }
        }
    },
};

/* Ajax Load Posts
 **-----------------------------------------------------*/
magty.loadPosts = {
    canBeLoaded: true,
    currentPage: 0,
    nextPage: 0,
    maxPage: 0,
    template: "",
    loadButton: "",
    loader: "",
    postsListsWrapper: "",
    loadType: "",

    init: function () {
        let loadButtonWrapper = document.querySelector(
            ".magty-load-posts-btn-wrapper"
        );

        if (loadButtonWrapper) {
            let self = this;

            self.currentPage = parseInt(
                loadButtonWrapper.getAttribute("data-page")
            );
            self.nextPage = self.currentPage + 1;
            self.maxPage = parseInt(
                loadButtonWrapper.getAttribute("data-max-pages")
            );
            self.template = loadButtonWrapper
                .closest("#primary")
                .getAttribute("data-template");
            self.loadButton = document.querySelector(".magty-ajax-load-btn");
            self.loader = document.querySelector(".magty-ajax-loader");
            self.postsListsWrapper =
                document.querySelector(".magty-posts-lists");
            self.loadType = loadButtonWrapper.getAttribute("data-load-type");

            if (!self.loadType) {
                self.loadType = "button_click_load";
            }

            if ("button_click_load" == self.loadType) {
                self.loadButton.addEventListener("click", function (event) {
                    event.preventDefault();
                    if (self.canBeLoaded) {
                        self.fetchThePosts();
                    }
                });
            }

            if ("infinite_scroll_load" == self.loadType) {
                loadButtonWrapper.style.opacity = 0.7;
                window.addEventListener("scroll", function (event) {
                    let btnPosition =
                        loadButtonWrapper.getBoundingClientRect().top;
                    let isBtnVisible = btnPosition - window.innerHeight <= 400;
                    if (
                        self.nextPage <= self.maxPage &&
                        isBtnVisible &&
                        self.canBeLoaded
                    ) {
                        self.fetchThePosts();
                    }
                });
            }
        }
    },
    fetchThePosts: function () {
        let self = this;

        self.canBeLoaded = false;
        self.loadButton.classList.add("loading-posts");
        self.loader.classList.add("active");

        let data = {
            action: "magty_load_posts",
            load_post_nonce: MagtyVars.load_post_nonce,
            query_vars: MagtyVars.query_vars,
            page: self.nextPage,
            template: self.template,
        };
        fetch(MagtyVars.ajaxurl, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: new URLSearchParams(data),
        })
            .then((response) => response.json())
            .then((response) => {
                if (response.success) {
                    let contentJoin = response.data.content.join("");
                    // self.postsListsWrapper.innerHTML += contentJoin;

                    let newElements =
                        magty.createElementsFromString(contentJoin);

                    newElements.forEach((element) => {
                        element.classList.add("animatefadeIn");
                        self.postsListsWrapper.appendChild(element);
                    });

                    self.currentPage = self.nextPage;
                    self.nextPage++;
                    self.canBeLoaded = true;

                    if (self.nextPage <= self.maxPage) {
                        self.loadButton.classList.remove("loading-posts");
                        self.loader.classList.remove("active");
                    } else {
                        document.querySelector(
                            ".magty-load-posts-btn-wrapper"
                        ).style.display = "none";
                    }

                    document.body.dispatchEvent(new Event("posts-loaded"));
                } else {
                    self.loadButton.classList.remove("loading-posts");
                    self.loader.classList.remove("active");
                }
            })
            .catch((error) => {
                console.error("Error during fetch:", error);
                self.loadButton.classList.remove("loading-posts");
                self.loader.classList.remove("active");
            });
    },
};

/* Create Elements from String
 *--------------------------------------------------*/
magty.createElementsFromString = function (htmlString) {
    const parser = new DOMParser();
    const doc = parser.parseFromString(htmlString, "text/html");
    return Array.from(doc.body.children);
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
function magtyDomReady(fn) {
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

magtyDomReady(function () {
    magty.stickyMenu.init();
    magty.subMenuToggle.init();
    magty.traverseMenu.init();
    magty.handleFocus.init();
    magty.CanvasModal.init();
    magty.SearchBlock.init();
    magty.scrollToTop.init();
    magty.setBackgroundImage.init();
    magty.progressBar.init();
    magty.slider.init();
    magty.tabs.init();
    magty.displayTime.init();
    magty.loadPosts.init();
});

window.addEventListener("load", function (event) {
    magty.fadeOutPreloader.init();
});
