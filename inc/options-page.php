<?php
function wp_headless_trigger_options_page() {
    settings_errors();

    echo '<h1>' . esc_html__( 'WP Headless Trigger', 'wp-headless-trigger' ) . '</h1>';
    echo '<p>' . esc_html__( 'Set up your webhooks to start deploying after every post or page update.', 'wp-headless-trigger' ) . '</p>';

    $last_trigger = get_option( 'wp_headless_trigger_last_trigger' );
    if ( ! empty( $last_trigger ) ) {
        echo esc_html__( 'Latest trigger: ', 'wp-headless-trigger' );
        echo '<strong>' . date( 'l jS \of F Y h:i:s A', $last_trigger ) . '</strong>';
    }

    echo '<form action="options.php" method="post">';
    settings_fields( 'wp_headless_trigger' );
    do_settings_sections( 'wp_headless_trigger' );
    submit_button();
    echo '</form>';
}

function wp_headless_trigger_webhook_url_render() {
    $options = get_option( 'wp_headless_trigger_settings' );
    echo '<input type="url" name="wp_headless_trigger_settings[wp_headless_trigger_webhook_url]"
    value="' . $options["wp_headless_trigger_webhook_url"] . '" class="regular-text code" placeholder="https://api.zeit.co/v1/integrations/deploy/QmV1259BpLx">';

    echo '<p class="description">' . esc_html__( 'The URL provided by your hosting company for a custom webhook', 'wp-headless-trigger' ) . '</p><br>';
}