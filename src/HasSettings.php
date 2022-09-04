<?php

namespace Ubmvn\Settings;

use Settings;

trait HasSettings
{
    /**
     * Retrieve the settings manager instance for this model.
     *
     * @return \Ubmvn\Settings\Settings
     */
    public function settings()
    {
        return Settings::for($this);
    }
}
