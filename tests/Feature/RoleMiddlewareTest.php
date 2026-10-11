<?php
namespace Tests\Feature;
use App\Models\User;use Illuminate\Foundation\Testing\RefreshDatabase;use Tests\TestCase;
class RoleMiddlewareTest extends TestCase {use RefreshDatabase;public function test_admin_can_access_admin_panel():void{$u=User::factory()->create(['role'=>'admin']);$this->actingAs($u)->get('/admin')->assertOk();}public function test_regular_user_cannot_access_admin_panel():void{$u=User::factory()->create(['role'=>'user']);$this->actingAs($u)->get('/admin')->assertForbidden();}}
