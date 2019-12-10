<?php

namespace WPConsole\Core\UserSettings;

class UserSettings {

    /**
     * Class constructor
     *
     * @since WP_CONSOLE_SINCE
     *
     * @return void
     */
    public function __construct() {
        add_filter( 'wp_console_controllers', [ $this, 'add_controller' ] );
        add_filter( 'wp_console_rest_controllers', [ $this, 'add_rest_controller' ] );
    }

    /**
     * Add chainable controller
     *
     * @since WP_CONSOLE_SINCE
     *
     * @param object $controllers
     *
     * @return object
     */
    public function add_controller( $controllers ) {
        $controllers->user_settings = new Controller();
        return $controllers;
    }

    /**
     * Add REST controller
     *
     * @since WP_CONSOLE_SINCE
     *
     * @param array $controllers
     *
     * @return void
     */
    public function add_rest_controller( $controllers ) {
        $controllers->user_settings = new RestController();
        return $controllers;
    }
}
