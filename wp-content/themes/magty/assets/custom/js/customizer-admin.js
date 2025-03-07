jQuery(document).ready(function ($) {
    // MultiCheckbox.
    jQuery('.customize-control-checkbox-multiple input[type="checkbox"]').on(
        "change",
        function () {
            let checkbox_values = jQuery(this)
                .parents(".customize-control")
                .find('input[type="checkbox"]:checked')
                .map(function () {
                    return this.value;
                })
                .get()
                .join(",");

            jQuery(this)
                .parents(".customize-control")
                .find('input[type="hidden"]')
                .val(checkbox_values)
                .trigger("change");
        }
    );
    // MultiCheckbox.
    jQuery('.customize-control-checkbox-taxonomies input[type="checkbox"]').on(
        "change",
        function () {
            let checkbox_values = jQuery(this)
                .parents(".customize-control")
                .find('input[type="checkbox"]:checked')
                .map(function () {
                    return this.value;
                })
                .get()
                .join(",");

            jQuery(this)
                .parents(".customize-control")
                .find('input[type="hidden"]')
                .val(checkbox_values)
                .trigger("change");
        }
    );
    jQuery(".control-section-magty-section-upsell").on("click", function () {
        window.open(
            "https://unfoldwp.com/products/magty/?utm_source=wp&utm_medium=customizer&utm_campaign=upgrade",
            "_blank"
        );
    });
});
