<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration {public function up():void{Schema::create('orders',function(Blueprint $t){$t->id();$t->foreignId('user_id')->constrained()->restrictOnDelete();$t->string('order_number')->unique();$t->string('status')->default('pending')->index();$t->decimal('total',12,2)->default(0);$t->text('shipping_address');$t->timestamp('ordered_at')->nullable();$t->timestamps();});}public function down():void{Schema::dropIfExists('orders');}};
