<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model { use HasFactory; protected $fillable=['category_id','name','slug','description','price','stock','image_url','is_active']; protected function casts(): array{return ['price'=>'decimal:2','is_active'=>'boolean'];} public function category(){return $this->belongsTo(Category::class);} public function cartItems(){return $this->hasMany(CartItem::class);} public function orderItems(){return $this->hasMany(OrderItem::class);} public function scopeAvailable(Builder $query): void {$query->where('is_active',true)->where('stock','>',0);} }
