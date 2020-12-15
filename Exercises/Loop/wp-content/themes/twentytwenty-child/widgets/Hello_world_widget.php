<?php
class Hello_world_widget extends WP_Widget
{
    //constructor function
    public function __construct()
    {
        $widget_id = 'hello_world_widget'; //this is a unique identifier string
        $widget_name = 'Hello World';
        $widget_options = array('description' => 'This is my first I400 widget. It says "Hello World".');
        parent::__construct($widget_id, $widget_name, $widget_options);
    }

    //widget functionality
    public function widget($args, $instance)
    {
        //main image of the widget
        echo '<img src="http://localhost/School/I400/i400_wp/wp-content/uploads/2020/12/patrickillustration.jpg" style="border-radius: 100%; border: 3px solid white; width: 40%;">';

        echo $args['before_widget'];
        $title = $instance['title'];
        echo $args['before_title'] . $title . $args['after_title'];

        //main body of the widget
        echo '<p>This is a widget for N413</p>';

        echo $args['after_widget'];
    } //end function widget

    //Widget admin dashboard options
    public function form($instance)
    {
        if (isset($instance["title"])) {
            $title = $instance["title"];
        } else {
            $title = "Hello World Widget";
        }
        //widget admin dashboard form
        echo '
        <p>
        <label for="' . $this->get_field_id('title') . '">Title:</label>
        <input class="widefat" id="' . $this->get_field_id('title') . '"name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '"/>
        </p>';
    } //end function form

    //Database updates
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $title = '';
        if (!empty($new_instance["title"])) {
            $title = strip_tags($new_instance["title"]);
        }
        $instance["title"] = $title;
        return $instance;
    } //end function update
} //end class Hello_world_widget
