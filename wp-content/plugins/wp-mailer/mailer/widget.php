<?php
/*
 * Took idea from http://www.tristanwaddington.com/2009/12/custom-wordpress-widget-tutorial/
 */
class WPM_Subscribe_Widget extends WP_Widget {
    function WPM_Subscribe_Widget() {
        // widget actual processes
        parent::WP_Widget(false, $name = 'WP Mailer Subscribe Form', array(
            'description' => 'Display a form which allows users to subscribe to WP Mailer'
        ));
    }

    function widget($args, $instance) {
        // outputs the content of the widget
        //global $post;

        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $form_id = (int)$instance['form_id'];

        echo $before_widget;

        if (!empty( $title )) echo $before_title . $title . $after_title;

        $html = wpm_form($form_id);
        echo $html;

        wp_reset_query();

        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    function form($instance) {
        $title = $instance['title'];
        $form_id = esc_attr($instance['form_id']);
        $forms = wpm_get_forms();
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('form_id'); ?>"><?php _e('Form:'); ?></label>
            <select id="<?php echo $this->get_field_id('form_id'); ?>" class="widefat" name="<?php echo $this->get_field_name('form_id'); ?>">
                <?php
                if (count($forms)) {
                    foreach ($forms as $form) {
                        echo '<option'.($form->form_id==$form_id?' selected':'').' value="'.(int)$form->form_id.'">'.esc_attr($form->form_name).'</option>';
                    }
                }
                ?>
            </select>
        </p>

    <?php
    }
}


function wpm_register_widgets() {
    register_widget('WPM_Subscribe_Widget');
}
add_action('widgets_init', 'wpm_register_widgets');
?>
