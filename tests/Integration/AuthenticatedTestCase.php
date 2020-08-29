<?php

namespace REBELinBLUE\Deployer\Tests\Integration;

use REBELinBLUE\Deployer\Tests\TestCase;
use REBELinBLUE\Deployer\User;

/**
 * Abstract class to set the user on all requests.
 */
abstract class AuthenticatedTestCase extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $user = factory(User::class)->create();

        $this->actingAs($user)->assertAuthenticated();
    }
}
