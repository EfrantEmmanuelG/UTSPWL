<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void { Schema::create('items', function (Blueprint $table) { $table->string('item_code')->primary(); $table->string('item'); $table->decimal('unit_price', 12, 2); $table->foreignId('company_id')->constrained('companies', 'company_id')->cascadeOnUpdate()->restrictOnDelete(); $table->timestamps(); }); }
    public function down(): void { Schema::dropIfExists('items'); }
};
