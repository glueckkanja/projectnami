<?php add_thickbox(); ?>

<div class="wrap about-wrap getbowtied-about-wrap">
	
    <?php require_once('global/pages-header.php'); ?>

    <br/>
	<div class="updated error importer-notice importer-notice-1" style="display: none;">
		<p><strong><?php echo __( "We're sorry but the demo data could not import. It is most likely due to low PHP configurations on your server.", 'getbowtied' ); ?></strong></p>
		<p><?php echo sprintf( __( 'Please use %s to factory reset your Wordpress , then come back and retry.', 'getbowtied' ), '<a href="' . admin_url() . 'plugin-install.php?tab=plugin-information&amp;plugin=wordpress-reset&amp;TB_iframe=true&amp;width=850&amp;height=450' . '" class="button-primary thickbox" title="">WordPress Reset Plugin</a>' ); ?></p>
	</div>

	<?php

	if ( class_exists( 'RegenerateThumbnails' ) ) :

		$regenerate_thumbnails_link = admin_url() . "tools.php?page=regenerate-thumbnails";
		$regenerate_thumbnails_class = "";
	
	else :

		$regenerate_thumbnails_link = admin_url() . "plugin-install.php?tab=plugin-information&amp;plugin=regenerate-thumbnails&amp;TB_iframe=true&amp;width=850&amp;height=450";
		$regenerate_thumbnails_class = "thickbox";

	endif;

	?>
	
	<div class="updated importer-notice importer-notice-2" style="display: none;"><p><strong><?php echo __( "Good job! The demo data was successfully imported. You may need to", "getbowtied" ); ?> <a href="<?php echo $regenerate_thumbnails_link; ?>" class="<?php echo $regenerate_thumbnails_class; ?>" title=""><?php echo __( "regenerate your thumbnails", "getbowtied" ); ?></a>.</strong></p></div>

	<div class="getbowtied-themes-demo">
		<div class="theme-browser rendered">
			<div class="themes">

				<?php if (THEME_SLUG == 'mr_tailor'): ?>

					<!-- Default -->
					<div class="theme">
						
						<div class="theme-screenshot">
							<img src="<?php echo $getbowtied_settings['demo_image']; ?>" alt="">
						</div>
						
						<h3 class="theme-name" id="default"><?php echo __( "Main Demo", "getbowtied" ); ?></h3>
						
						<div class="theme-actions">
							<?php printf( '<a class="button button-primary getbowtied-install-demo-button" data-demo-id="default" href="#">%1s</a>', __( "Install", "getbowtied" ) ); ?>
							<?php printf( '<a class="button button-primary" target="_blank" href="%1s">%2s</a>', $getbowtied_settings['dummy_data_preview'], __( "Live Preview", "getbowtied" ) ); ?>
						</div>
						
						<div class="demo-import-loader preview-all"></div>
						
						<div class="demo-import-loader preview-default"><i class="dashicons dashicons-admin-generic"></i></div>
					
					</div>

					<div class="theme">
					
						<div class="theme-screenshot">
							<img src="<?php echo $getbowtied_settings['demo_image_indie']; ?>" alt="">
						</div>
						
						<h3 class="theme-name" id="default"><?php echo __( "Indie Store", "getbowtied" ); ?></h3>
						
						<div class="theme-actions">
							<?php printf( '<a class="button button-primary getbowtied-install-demo-button" data-demo-id="indie-store" href="#">%1s</a>', __( "Install", "getbowtied" ) ); ?>
							<?php printf( '<a class="button button-primary" target="_blank" href="%1s">%2s</a>', $getbowtied_settings['dummy_data_preview_indie'], __( "Live Preview", "getbowtied" ) ); ?>
						</div>
						
						<div class="demo-import-loader preview-all"></div>
						
						<div class="demo-import-loader preview-indie-store"><i class="dashicons dashicons-admin-generic"></i></div>
				
					</div>


					<div class="theme">
					
						<div class="theme-screenshot">
							<img src="<?php echo $getbowtied_settings['demo_image_startup']; ?>" alt="">
						</div>
						
						<h3 class="theme-name" id="default"><?php echo __( "Startup", "getbowtied" ); ?></h3>
						
						<div class="theme-actions">
							<?php printf( '<a class="button button-primary getbowtied-install-demo-button" data-demo-id="startup" href="#">%1s</a>', __( "Install", "getbowtied" ) ); ?>
							<?php printf( '<a class="button button-primary" target="_blank" href="%1s">%2s</a>', $getbowtied_settings['dummy_data_preview_startup'], __( "Live Preview", "getbowtied" ) ); ?>
						</div>
						
						<div class="demo-import-loader preview-all"></div>
						
						<div class="demo-import-loader preview-startup"><i class="dashicons dashicons-admin-generic"></i></div>
				
					</div>
				<?php else: ?>

								<!-- Default -->
				<div class="theme">
					
					<div class="theme-screenshot">
						<img src="<?php echo $getbowtied_settings['demo_image']; ?>" alt="">
					</div>
					
					<h3 class="theme-name" id="default"><?php echo getbowtied_theme_name() . " - " . __( "Default Demo", "getbowtied" ); ?></h3>
					
					<div class="theme-actions">
						<?php printf( '<a class="button button-primary getbowtied-install-demo-button" data-demo-id="default" href="#">%1s</a>', __( "Install", "getbowtied" ) ); ?>
						<?php printf( '<a class="button button-primary" target="_blank" href="%1s">%2s</a>', $getbowtied_settings['dummy_data_preview'], __( "Live Preview", "getbowtied" ) ); ?>
					</div>
					
					<div class="demo-import-loader preview-all"></div>
					
					<div class="demo-import-loader preview-default"><i class="dashicons dashicons-admin-generic"></i></div>
				
				</div>

				<?php endif; ?>


			</div>
		</div>
	</div>

<!-- 	<a href="javascript:void(0)" class="toggle-system">
		<?php _e( 'Demo import system status <span class="dashicons dashicons-editor-help"></span>', 'getbowtied' ); ?>
	</a> -->

	<!-- STAGING DEMO CHECKLIST -->
	<!-- <div class="status-holder">
		<table class="demo-import-status" cellspacing="0">
		<thead>
			<tr>
				<td><?php _e( 'Function', 'getbowtied' ); ?></td>
				<td><?php _e( 'Required', 'getbowtied' ); ?></td>
				<td><?php _e( 'Available', 'getbowtied' ); ?></td>
			</tr>
		</thead>
		<tbody>
			<?php if ( function_exists( 'ini_get' ) ) : ?>
				<tr>
					<td data-export-label="Server Memory Limit"><?php _e( 'Server Memory Limit', 'getbowtied' ); ?>:</td>
					<td>256M</td>
					<td>
						<?php
							$mem = intval(substr(ini_get('memory_limit'), 0, -1));

							$mark = $mem >= 256 ? 'yes' : 'error'; 
						?>
						<mark class="<?php echo $mark; ?>">
								<?php echo $mem >= 256 ? '<span class="dashicons dashicons-yes"></span>' : '<span class="dashicons dashicons-warning"></span>'; ?>  <?php echo ini_get('memory_limit'); ?>
						</mark>

					</td>
				</tr>
				<tr>
					<td data-export-label="PHP Time Limit"><?php _e( 'PHP Time Limit', 'woocommerce' ); ?>:</td>
					<td>300</td>
					<td>
						<?php
							$exec = intval(ini_get('max_execution_time'));

							$mark = $exec >= 300 ? 'yes' : 'error'; 
						?>
						<mark class="<?php echo $mark; ?>">
								<?php echo $exec >= 300 ? '<span class="dashicons dashicons-yes"></span>' : '<span class="dashicons dashicons-warning"></span>'; ?>  <?php echo ini_get('max_execution_time'); ?>
						</mark>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td data-export-label="Max Upload Size"><?php _e( 'Max Upload Size', 'woocommerce' ); ?>:</td>
				<td>128 MB</td>
				<td>
					<?php

						$upl = intval(substr(size_format( wp_max_upload_size() ), 0, -1));
						$mark = $upl >= 128 ? 'yes' : 'error'; 
					?>
					<mark class="<?php echo $mark; ?>">
							<?php echo $upl >= 128 ? '<span class="dashicons dashicons-yes"></span>' : '<span class="dashicons dashicons-warning"></span>'; ?>  <?php echo size_format( wp_max_upload_size() ); ?>
					</mark>
				</td>
			</tr>
			<?php
				$posting = array();

				// fsockopen/cURL
				$posting['fsockopen_curl']['name'] = 'fsockopen/cURL';
				$posting['fsockopen_curl']['help'] = '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'Payment gateways can use cURL to communicate with remote servers to authorize payments, other plugins may also use it when communicating with remote services.', 'woocommerce' ) . '">[?]</a>';

				if (  (function_exists( 'fsockopen' ) || function_exists( 'curl_init' ) ) ) {
					$posting['fsockopen_curl']['success'] = true;
				} else {
					$posting['fsockopen_curl']['success'] = false;
					$posting['fsockopen_curl']['note']    = __( 'Your server does not have fsockopen or cURL enabled.', 'getbowtied' ). '</mark>';
				}

				// GZIP
				$posting['gzip']['name'] = 'GZip';
				
				if (  is_callable( 'gzopen' ) ) {
					$posting['gzip']['success'] = true;
				} else {
					$posting['gzip']['success'] = false;
					$posting['gzip']['note']    = sprintf( __( 'Your server does not support the <a href="%s">gzopen</a> function.', 'getbowtied' ), 'http://php.net/manual/en/zlib.installation.php' ) . '</mark>';
				}

				// WP Remote Post Check
				$posting['wp_remote_post']['name'] = __( 'Remote Post', 'woocommerce');
				$posting['wp_remote_post']['help'] = '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'PayPal uses this method of communicating when sending back transaction information.', 'woocommerce' ) . '">[?]</a>';

				$response = wp_safe_remote_post( 'https://www.paypal.com/cgi-bin/webscr', array(
					'timeout'    => 60,
					'user-agent' => 'WooCommerce/' . WC()->version,
					'body'       => array(
						'cmd'    => '_notify-validate'
					)
				) );

				if (  ! is_wp_error( $response ) && $response['response']['code'] >= 200 && $response['response']['code'] < 300 ) {
					$posting['wp_remote_post']['success'] = true;
				} else {
					$posting['wp_remote_post']['note']    = __( 'wp_remote_post() failed.', 'getbowtied' );
					if ( is_wp_error( $response ) ) {
						$posting['wp_remote_post']['note'] .= ' ' . sprintf( __( 'Error: %s', 'woocommerce' ), wc_clean( $response->get_error_message() ) );
					} else {
						$posting['wp_remote_post']['note'] .= ' ' . sprintf( __( 'Status code: %s', 'woocommerce' ), wc_clean( $response['response']['code'] ) );
					}
					$posting['wp_remote_post']['success'] = false;
				}

				// WP Remote Get Check
				$posting['wp_remote_get']['name'] = __( 'Remote Get', 'woocommerce');
				$response = wp_safe_remote_get( 'http://www.woothemes.com/wc-api/product-key-api?request=ping&network=' . ( is_multisite() ? '1' : '0' ) );

				if (  !is_wp_error( $response ) && $response['response']['code'] >= 200 && $response['response']['code'] < 300 ) {
					$posting['wp_remote_get']['success'] = true;
				} else {
					$posting['wp_remote_get']['note']    = __( 'wp_remote_get() failed.', 'woocommerce' );
					if ( is_wp_error( $response ) ) {
						$posting['wp_remote_get']['note'] .= ' ' . sprintf( __( 'Error: %s', 'woocommerce' ), wc_clean( $response->get_error_message() ) );
					} else {
						$posting['wp_remote_get']['note'] .= ' ' . sprintf( __( 'Status code: %s', 'woocommerce' ), wc_clean( $response['response']['code'] ) );
					}
					$posting['wp_remote_get']['success'] = false;
				}

				$posting = apply_filters( 'woocommerce_debug_posting', $posting );

				foreach ( $posting as $post ) {
					$mark = ! empty( $post['success'] ) ? 'yes' : 'error';
					?>
					<tr>
						<td data-export-label="<?php echo esc_html( $post['name'] ); ?>"><?php echo esc_html( $post['name'] ); ?>:</td>
						<td><?php _e( 'Enabled', 'getbowtied' ); ?></td>
						<td>
							<mark class="<?php echo $mark; ?>">
								<?php echo ! empty( $post['success'] ) ? '<span class="dashicons dashicons-yes"></span>' : '<span class="dashicons dashicons-warning"></span>'; ?> <?php echo ! empty( $post['note'] ) ? wp_kses_data( $post['note'] ) : ''; ?>
							</mark>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
		</table>
	</div> -->

</div>

