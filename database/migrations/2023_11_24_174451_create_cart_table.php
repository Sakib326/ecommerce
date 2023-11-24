<?php

// database/migrations/xxxx_xx_xx_create_cart_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    public function up()
    {
       // Example migration for the carts table

Schema::create('carts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained(); // Foreign key relationship with users table
    $table->foreignId('book_id')->constrained();
    $table->integer('quantity')->default(1);
    $table->timestamps();
});

    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}

