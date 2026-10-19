<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'item_code';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['item_code', 'item', 'unit_price', 'company_id'];
    protected function casts(): array
    {
        return ['unit_price' => 'decimal:2'];
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class, 'item_code', 'item_code');
    }
}
