/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
	// Cache selectors to avoid repeated DOM queries.
	const $siteTitle = $('.site-title');
	const $siteTitleLink = $siteTitle.find('a');
	const $siteDescription = $('.site-description');
	const $siteHeader = $('.site-header');

	// Check if elements exist before binding events.
	if ($siteTitle.length && $siteTitleLink.length && $siteDescription.length) {
		// Site title and description.
		wp.customize('blogname', function (value) {
			value.bind(function (to) {
				$siteTitleLink.text(to);
			});
		});

		wp.customize('blogdescription', function (value) {
			value.bind(function (to) {
				$siteDescription.text(to);
			});
		});
	}

	// Header text color.
	wp.customize('header_textcolor', function (value) {
		value.bind(function (to) {
			if ('blank' === to) {
				// Modern approach to hide text for accessibility purposes.
				$siteTitle.add($siteDescription).css({
					clipPath: 'inset(50%)',
					height: '1px',
					overflow: 'hidden',
					width: '1px',
					position: 'absolute',
				});
			} else {
				$siteTitle.add($siteDescription).css({
					clipPath: 'none',
					height: 'auto',
					overflow: 'visible',
					width: 'auto',
					position: 'relative',
				});

				// Check if the header element exists before applying color.
				if ($siteHeader.length) {
					$siteHeader.add($siteHeader.find('a:not(:hover, :focus)')).css({
						color: to,
					});
				}
			}
		});
	});
})(jQuery);

