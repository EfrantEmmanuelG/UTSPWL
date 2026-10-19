<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    protected $fillable = ['company_name', 'headquarters_phone_number'];

    public function items(): HasMany
    {
        return $this->hasMany(Item::class, 'company_id', 'company_id');
    }
}
