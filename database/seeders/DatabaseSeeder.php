<?php
namespace Database\Seeders;
use App\Models\Category;use App\Models\Product;use App\Models\User;use App\Models\Cart;use App\Models\Post;use Illuminate\Database\Seeder;use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder {public function run():void{
 foreach(['Elektronik','Aksesori','Komputer','Rumah Tangga','Fashion','Olahraga'] as $name){Category::firstOrCreate(['slug'=>strtolower(str_replace(' ','-',$name))],['name'=>$name,'description'=>'Kategori '.$name.' pilihan']);}
 $admin=User::firstOrCreate(['email'=>'admin@example.com'],['name'=>'Admin Demo','password'=>Hash::make('password'),'role'=>'admin','email_verified_at'=>now()]);
 $editor=User::firstOrCreate(['email'=>'editor@example.com'],['name'=>'Editor Demo','password'=>Hash::make('password'),'role'=>'editor','email_verified_at'=>now()]);
 $user=User::firstOrCreate(['email'=>'user@example.com'],['name'=>'User Demo','password'=>Hash::make('password'),'role'=>'user','email_verified_at'=>now()]);
 Product::factory()->count(60)->create();
 foreach([$admin,$editor,$user] as $person){Cart::firstOrCreate(['user_id'=>$person->id]);}
 Post::factory()->count(8)->create(['user_id'=>$editor->id]);
}}
