<?php

if (! function_exists('settings')) {
    /**
     * Get a settings manager instance.
     *
     * @return \Ubmvn\Settings\Settings
     */
    function settings()
    {
        return app('settings');
    }
}
