<?php

namespace Ubmvn\Settings\Tests;

use Ubmvn\Settings\Settings;
use Ubmvn\Settings\Tests\Models\User;

class HasSettingsTest extends TestCase
{
    public function test_has_settings_trait_retrieves_an_instance_of_settings_class()
    {
        $user = User::create(['name' => 'Mohammed']);

        $this->assertInstanceOf(Settings::class, $user->settings());
    }
}
