<?php
namespace Database\Factories;
use App\Models\User;use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory {public function definition():array{$title=fake()->sentence(5);return ['user_id'=>User::factory(),'title'=>$title,'slug'=>fake()->unique()->slug(),'body'=>fake()->paragraphs(4,true),'published_at'=>now()];}}
