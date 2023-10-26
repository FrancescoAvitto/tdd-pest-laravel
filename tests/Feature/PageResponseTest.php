<?php

use function Pest\Laravel\get;

it('the application returns a successful response for homepage', function () {

    // Act & asserts
    get(route('home'))
        ->assertOk();
});
