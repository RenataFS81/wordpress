wp.customize.controlConstructor["kirki-slider"] = wp.customize.Control.extend({
  ready: function () {
    "use strict";

    var control = this,
      value,
      thisInput,
      inputDefault,
      changeAction;

    // Update the text value
    jQuery("input[type=range]").on("click mousedown", function () {
      value = jQuery(this).val();
      jQuery(this)
        .closest("label")
        .find(".kirki_range_value .value")
        .text(value);

      jQuery(this).on("mousemove", function () {
        value = jQuery(this).val();
        jQuery(this)
          .closest("label")
          .find(".kirki_range_value .value")
          .text(value);
      });
    });

		// Update the text value
		jQuery( 'input[type=range]' ).on('click mousedown', function(){
			value = jQuery( this ).val();
			jQuery( this ).closest( 'label' ).find( '.kirki_range_value .value' ).text( value );

			jQuery( this ).on('mousemove', function(){
				value = jQuery( this ).val();
				jQuery( this ).closest( 'label' ).find( '.kirki_range_value .value' ).text( value );
			})

		})

    if ("postMessage" === control.setting.transport) {
      changeAction = "mousemove change";
    } else {
      changeAction = "change";
    }

    // Save changes.
    this.container.on(changeAction, "input", function () {
      control.setting.set(jQuery(this).val());
    });
  },
});
