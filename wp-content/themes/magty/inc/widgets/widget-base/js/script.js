jQuery(document).ready(function ($) {
    let MagtyWidgets = {
        init: function () {
            this.initColorPicker();
            this.addImage();
            this.removeImage();
            this.bindEvents();
        },

        initColorPicker: function () {
            $(".widget:has(.color-picker) .color-picker").wpColorPicker({
                change: function (event, ui) {
                    $(event.target).val(ui.color.toString());
                    $(event.target).trigger("change");
                },
            });
        },

        addImage: function () {
            jQuery(document).on(
                "click",
                ".upload_image_button",
                function (event) {
                    event.preventDefault();

                    var file_frame;
                    var _that = jQuery(this);

                    // Create the media frame.
                    file_frame = wp.media.frames.downloadable_file = wp.media({
                        title: _that.attr("data-uploader-title-txt"),
                        button: {
                            text: _that.attr("data-uploader-btn-txt"),
                        },
                        multiple: false,
                    });

                    // When an image is selected, run a callback.
                    file_frame.on("select", function () {
                        var attachment = file_frame
                            .state()
                            .get("selection")
                            .first()
                            .toJSON();
                        var attachment_thumbnail =
                            attachment.sizes.thumbnail || attachment.sizes.full;

                        _that.prev().trigger("change").val(attachment.id);
                        var image_html =
                            '<img src="' + attachment_thumbnail.url + '" />';
                        _that
                            .closest(".image-field")
                            .find(".image-preview")
                            .html(image_html);
                        _that.next().show();
                    });

                    // Finally, open the modal.
                    file_frame.open();
                }
            );
        },

        removeImage: function () {
            jQuery(document).on("click", ".remove_image_button", function () {
                var _this = jQuery(this);
                _this.closest(".image-field").find(".image-preview").html(" ");
                _this.siblings(".img").trigger("change").val("");
                _this.hide();
                return false;
            });
        },

        bindEvents: function () {
            $(document).on(
                "widget-updated widget-added",
                MagtyWidgets.reinit_controls
            );
        },

        reinit_controls: function () {
            MagtyWidgets.initColorPicker();
        },
    };

    $(function () {
        MagtyWidgets.init();
    });
});
