!(function ($) {
    var magtyPostMeta = magtyPostMeta || {};

    magtyPostMeta.overridePostMeta = function () {
        // Meta Override.
        let isPostMetaOverridden = document.getElementById(
            "magty-override-post-metas"
        );
        let postMetasWrapperDiv = document.querySelector(
            ".magty-available-post-metas"
        );
        if (isPostMetaOverridden) {
            isPostMetaOverridden.addEventListener("click", function (event) {
                if (true === event.target.checked) {
                    postMetasWrapperDiv.style.display = "block";
                } else {
                    postMetasWrapperDiv.style.display = "none";
                }
            });
        }
    };

    magtyPostMeta.tabs = function () {
        // Tabs.
        let postMetaWrapper = document.querySelector(
            ".magty-meta-options-wrapper"
        );
        if (postMetaWrapper) {
            var tabLinks = document.querySelectorAll(
                ".magty-section-tab-header .magty-tab-title"
            );
            var tabContents = document.querySelectorAll(
                ".magty-section-tab-content .magty-tab-content"
            );

            tabLinks.forEach(function (link) {
                link.addEventListener("click", function (e) {
                    e.preventDefault();

                    // Remove active class from all tab links
                    tabLinks.forEach(function (tabLink) {
                        tabLink.classList.remove("is-active");
                    });

                    // Add active class to the clicked tab link
                    this.classList.add("is-active");

                    // Hide all tab contents
                    tabContents.forEach(function (content) {
                        content.classList.remove("is-active");
                    });

                    // Show the corresponding tab content
                    var tabId = "magty-tab-" + this.getAttribute("data-tab");
                    document.getElementById(tabId).classList.add("is-active");
                });
            });
        }
    };

    $(document).ready(function ($) {
        magtyPostMeta.overridePostMeta();
        magtyPostMeta.tabs();
    });
})(jQuery);
