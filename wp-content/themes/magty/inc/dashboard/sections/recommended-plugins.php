<?php
/**
 * Recommended Plugins
 *
 * @package Magty
 */

?>
<div class="magty-dashboard-body">
	<?php if ( $this->recommended_plugins && is_array( $this->recommended_plugins ) ) : ?>
		<div class="magty-recommended-plugins">
			<?php foreach ( $this->recommended_plugins as $plugin_data ) : ?>
				<div class="magty-plugin-card">
					<div class="plugin-wrap">
						<div class="plugin-title">
							<img src="<?php echo esc_url( $plugin_data['icon'] ); ?>">
							<h2><?php echo esc_html( $plugin_data['name'] ); ?></h2>
						</div>
						<div class="plugin-desc">
							<?php echo esc_html( $plugin_data['desc'] ); ?>
						</div>
					</div>
					<div class="plugin-action">
						<?php
						$plugin_status = $plugin_data['status'];
						$btn_attr      = '';
						if ( 'install' === $plugin_status ) {
							$data_action = 'magty_install_plugin';
							$data_btn    = 'Install';
							$btn_class   = 'button button-primary install';

						} elseif ( 'installed' === $plugin_status ) {
							$data_action = 'magty_activate_plugin';
							$data_btn    = 'Activate';
							$btn_class   = 'button button-secondary activate';
						} else {
							$data_action = '';
							$data_btn    = 'Activated';
							$btn_class   = 'button activated';
							$btn_attr    = 'disabled';
						}
						?>
						<a href="#" class="<?php echo esc_attr( $btn_class ); ?>" data-action="<?php echo esc_attr( $data_action ); ?>" data-slug="<?php echo esc_attr( $plugin_data['slug'] ); ?>" data-path="<?php echo esc_attr( $plugin_data['path'] ); ?>" <?php echo esc_attr( $btn_attr ); ?>>
							<?php
							printf(
								/* translators: %s: Button Label */
								__( '%s', 'magty' ),
								$data_btn
							);
							?>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>
