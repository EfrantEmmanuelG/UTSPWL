<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void { Schema::create('sales', function (Blueprint $table) { $table->id('purchase_number'); $table->date('date_of_purchase'); $table->foreignId('customer_id')->constrained('customers', 'customer_id')->cascadeOnUpdate()->restrictOnDelete(); $table->string('item_code'); $table->foreign('item_code')->references('item_code')->on('items')->cascadeOnUpdate()->restrictOnDelete(); $table->timestamps(); }); }
    public function down(): void { Schema::dropIfExists('sales'); }
};
