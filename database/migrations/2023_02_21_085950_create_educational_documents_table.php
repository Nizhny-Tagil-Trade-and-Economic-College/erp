<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_documents', function (Blueprint $table) {
            $table -> id();
            $table -> char('series', 10)
                -> nullable();
            $table -> char('number', 25);
            $table -> foreignId('educational_doc_type_id')
                -> references('id')
                -> on('educational_doc_types');
            $table -> foreignId('educational_doc_issuer_id')
                -> references('id')
                -> on('educational_doc_issuers');
            $table -> foreignId('person_id')
                -> references('id')
                -> on('persons');
            $table -> float('average_mark', 8, 3)
                -> nullable();
            $table -> boolean('is_main')
                -> default(true);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educational_documents');
    }
};
