<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
               $table->char('prefix',5);
            $table->integer('invoice_id');
            $table->date('date_invoice');
            $table->date('expiration_date');
            $table->enum('type_invoice',['credito','contado'])->default('contado');
            $table->biginteger('customers_id');
            $table->double('invoice_value');
            $table->enum('status_invoice',['anulada','canselada','activa','parcial'])
            ->default('activa');
            $table->biginteger('seller_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
