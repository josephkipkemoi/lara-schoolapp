<?php

namespace Tests\Feature\Board;

use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoardTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_post_board_members()
    {
        $department = Department::get()->first();

        $response = $this->post("/board/{$department}/staff", [
            'salutation' => 'Mr.',
            'full_name' => $this->faker()->name(),
            'role' => 'Chairman'
        ]);

        $response->assertStatus(200);
    }
}
