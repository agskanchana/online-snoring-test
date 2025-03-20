<?php
/**
* Plugin Name: Online Snoring Test plugin - From Snorer Pharmacy
* Plugin URI: https://snorer.com/
* Description: Online Snoring Test from Snorer.com to check for symptoms of obstructive sleep apnoea.
* Version: 1.0
* Author: Janaka
* Author URI: https://www.upwork.com/o/profiles/users/~019ea6762af63a0f93/
**/

// Add the admin menu
add_action('admin_menu', 'snoring_test_menu');

// Register settings
add_action('admin_init', 'snoring_test_register_settings');

// Enqueue scripts and styles
function snoring_test_script_enqueue() {
    wp_enqueue_style('snoring-styles', plugin_dir_url(__FILE__) . 'css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('snoring-js', plugin_dir_url(__FILE__) . 'js/script.js', array(), '1.3.1', true);
}
add_action('wp_enqueue_scripts', 'snoring_test_script_enqueue');

// Admin menu
function snoring_test_menu() {
    add_menu_page(
        'Online Snoring Test from Snorer.com',
        'Snoring Test',
        'manage_options',
        'snoring-test',
        'snoring_test_options_page',
        plugin_dir_url(__FILE__) . '/img/snoring.png'
    );
}

// Register settings
function snoring_test_register_settings() {
    register_setting('snoring_test_options_group', 'snoring_test_options');

    // Colors section
    add_settings_section(
        'snoring_test_colors_section',
        'Colors',
        'snoring_test_colors_section_callback',
        'snoring-test'
    );

    add_settings_field(
        'background_color',
        'Background Color',
        'snoring_test_color_field_callback',
        'snoring-test',
        'snoring_test_colors_section',
        array('id' => 'background_color', 'default' => '#fff')
    );

    add_settings_field(
        'icons_color',
        'Icons Color',
        'snoring_test_color_field_callback',
        'snoring-test',
        'snoring_test_colors_section',
        array('id' => 'icons_color', 'default' => '#4285f4')
    );

    add_settings_field(
        'text_color',
        'Text Color',
        'snoring_test_color_field_callback',
        'snoring-test',
        'snoring_test_colors_section',
        array('id' => 'text_color', 'default' => '#000')
    );

    // Font sizes section
    add_settings_section(
        'snoring_test_font_section',
        'Font Sizes',
        'snoring_test_font_section_callback',
        'snoring-test'
    );

    add_settings_field(
        'heading',
        'Heading Size',
        'snoring_test_range_field_callback',
        'snoring-test',
        'snoring_test_font_section',
        array('id' => 'heading', 'default' => '36', 'min' => '18', 'max' => '60')
    );

    add_settings_field(
        'general',
        'General Text Size',
        'snoring_test_range_field_callback',
        'snoring-test',
        'snoring_test_font_section',
        array('id' => 'general', 'default' => '15', 'min' => '12', 'max' => '40')
    );

    // Call to action section
    add_settings_section(
        'snoring_test_cta_section',
        'Call to Action',
        'snoring_test_cta_section_callback',
        'snoring-test'
    );

    add_settings_field(
        'call_action_button_link',
        'CTA Button Link',
        'snoring_test_url_field_callback',
        'snoring-test',
        'snoring_test_cta_section',
        array('id' => 'call_action_button_link')
    );
}

// Section callbacks
function snoring_test_colors_section_callback() {
    echo '<p>Customize the colors of the snoring test.</p>';
}

function snoring_test_font_section_callback() {
    echo '<p>Customize the font sizes of the snoring test.</p>';
}

function snoring_test_cta_section_callback() {
    echo '<p>Set up the call to action button.</p>';
}

// Field callbacks
function snoring_test_color_field_callback($args) {
    $options = get_option('snoring_test_options', array());
    $value = isset($options[$args['id']]) ? $options[$args['id']] : $args['default'];

    // Enqueue color picker scripts
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');
    wp_add_inline_script('wp-color-picker', 'jQuery(document).ready(function($){ $(".color-picker").wpColorPicker(); });');

    echo '<input type="text" name="snoring_test_options[' . $args['id'] . ']" value="' . esc_attr($value) . '" class="color-picker" />';
}

function snoring_test_range_field_callback($args) {
    $options = get_option('snoring_test_options', array());
    $value = isset($options[$args['id']]) ? $options[$args['id']] : $args['default'];

    echo '<input type="range" name="snoring_test_options[' . $args['id'] . ']" value="' . esc_attr($value) . '" min="' . $args['min'] . '" max="' . $args['max'] . '" />';
    echo '<span class="range-value">' . esc_attr($value) . 'px</span>';

    // Add a script to show the current value
    echo '<script>
        jQuery(document).ready(function($) {
            $("input[name=\'snoring_test_options[' . $args['id'] . ']\']").on("input", function() {
                $(this).next(".range-value").text(this.value + "px");
            });
        });
    </script>';
}

function snoring_test_url_field_callback($args) {
    $options = get_option('snoring_test_options', array());
    $value = isset($options[$args['id']]) ? $options[$args['id']] : '';

    echo '<input type="url" name="snoring_test_options[' . $args['id'] . ']" value="' . esc_url($value) . '" class="regular-text" />';
}

// Options page output
function snoring_test_options_page() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <div class="notice notice-info">
            <p>Use the shortcode <code>[snoring_test]</code> to display the snoring test on any page or post.</p>
        </div>

        <form method="post" action="options.php">
            <?php
            settings_fields('snoring_test_options_group');
            do_settings_sections('snoring-test');
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

// Register Gutenberg block
function snoring_test_register_block() {
    // Skip if Gutenberg is not available
    if (!function_exists('register_block_type')) {
        return;
    }

    // Register the block script
    wp_register_script(
        'snoring-test-block-editor',
        plugins_url('js/block.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-components', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . 'js/block.js')
    );

    // Register editor style (optional)
    wp_register_style(
        'snoring-test-block-editor',
        plugins_url('css/block-editor.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'css/block-editor.css')
    );

    // Register the block
    register_block_type('snoring-test/quiz-block', array(
        'editor_script' => 'snoring-test-block-editor',
        'editor_style' => 'snoring-test-block-editor',
        'render_callback' => 'snoring_test_render_block',
        'attributes' => array(
            'background_color' => array('type' => 'string', 'default' => ''),
            'icons_color' => array('type' => 'string', 'default' => ''),
            'text_color' => array('type' => 'string', 'default' => ''),
            'heading' => array('type' => 'number', 'default' => 36),
            'general' => array('type' => 'number', 'default' => 15),
        ),
    ));
}
add_action('init', 'snoring_test_register_block');

// Block render callback
function snoring_test_render_block($attributes, $content) {
    // Get default options
    $options = get_option('snoring_test_options', array());

    // Merge with block-specific attributes if provided
    $atts = array();
    if (!empty($attributes['background_color'])) $atts['background_color'] = $attributes['background_color'];
    if (!empty($attributes['icons_color'])) $atts['icons_color'] = $attributes['icons_color'];
    if (!empty($attributes['text_color'])) $atts['text_color'] = $attributes['text_color'];
    if (!empty($attributes['heading'])) $atts['heading'] = $attributes['heading'];
    if (!empty($attributes['general'])) $atts['general'] = $attributes['general'];

    // Use block attributes but fall back to global options
    $qz_bg = !empty($atts['background_color']) ? $atts['background_color'] : (!empty($options['background_color']) ? $options['background_color'] : '#fff');
    $qz_color = !empty($atts['icons_color']) ? $atts['icons_color'] : (!empty($options['icons_color']) ? $options['icons_color'] : '#4285f4');
    $qz_text = !empty($atts['text_color']) ? $atts['text_color'] : (!empty($options['text_color']) ? $options['text_color'] : '#000');
    $qz_heading = (!empty($atts['heading']) ? $atts['heading'] : (!empty($options['heading']) ? $options['heading'] : '36')) . 'px';
    $qz_general = (!empty($atts['general']) ? $atts['general'] : (!empty($options['general']) ? $options['general'] : '15')) . 'px';

    // Create a block array with an ID to pass to the template
    $block = array(
        'id' => 'block_' . uniqid()
    );

    // Output
    ob_start();
    include_once(plugin_dir_path(__FILE__) . '/template-parts/blocks/quiz/quiz.php');
    ?>
    <style>
        .quiz-wrapper {
            --qz-bg: <?php echo $qz_bg; ?>;
            --qz-color: <?php echo $qz_color; ?>;
            --qz-text: <?php echo $qz_text; ?>;
            --qz-heading: <?php echo $qz_heading; ?>;
            --qz-general: <?php echo $qz_general; ?>;
        }
    </style>
    <?php
    return ob_get_clean();
}

// Shortcode implementation
add_shortcode('snoring_test', function() {
    $options = get_option('snoring_test_options', array());

    // Default values
    $qz_bg = !empty($options['background_color']) ? $options['background_color'] : '#fff';
    $qz_color = !empty($options['icons_color']) ? $options['icons_color'] : '#4285f4';
    $qz_text = !empty($options['text_color']) ? $options['text_color'] : '#000';
    $qz_heading = (!empty($options['heading']) ? $options['heading'] : '36') . 'px';
    $qz_general = (!empty($options['general']) ? $options['general'] : '15') . 'px';

    // Create a block array with an ID to pass to the template
    $block = array(
        'id' => 'shortcode_' . uniqid()
    );

    ob_start();
    include_once(plugin_dir_path(__FILE__) . '/template-parts/blocks/quiz/quiz.php');
    ?>
    <style>
        .quiz-wrapper {
            --qz-bg: <?php echo $qz_bg; ?>;
            --qz-color: <?php echo $qz_color; ?>;
            --qz-text: <?php echo $qz_text; ?>;
            --qz-heading: <?php echo $qz_heading; ?>;
            --qz-general: <?php echo $qz_general; ?>;
        }
    </style>
    <?php
    return ob_get_clean();
});

