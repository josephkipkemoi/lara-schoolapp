<?php

namespace Tests\Feature\About;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_post_about_school()
    {
        $response = $this->post('/about', [
            'school_background' => $this->faker()->paragraph(),
            'academic_background' => $this->faker()->paragraph(),
        ]);
 
        $response->assertOk();
    }

    public function test_guest_users_can_view_about_page()
    {
        $response = $this->get('/about');

        $response->assertOk();
    }
}
