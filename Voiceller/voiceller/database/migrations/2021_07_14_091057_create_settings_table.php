<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('name', 128)->primary();
            $table->text('value')->nullable();
        });

        DB::table('settings')->insert(
            [      
                [
                    'name' => 'invoice_vendor',
                    'value' => 'CloudPolly'
                ], 
                [
                    'name' => 'invoice_vendor_website',
                    'value' => ''
                ],               
                [
                    'name' => 'invoice_address',
                    'value' => ''
                ],
                [
                    'name' => 'invoice_city',
                    'value' => ''
                ],
                [
                    'name' => 'invoice_country',
                    'value' => ''
                ],
                [
                    'name' => 'invoice_phone',
                    'value' => ''
                ],
                [
                    'name' => 'invoice_postal_code',
                    'value' => ''
                ],
                [
                    'name' => 'invoice_state',
                    'value' => ''
                ],
                [
                    'name' => 'invoice_vat_number',
                    'value' => ''
                ],                
                [
                    'name' => 'invoice_currency',
                    'value' => 'USD'
                ],
                [
                    'name' => 'invoice_language',
                    'value' => 'en'
                ],               
                [
                    'name' => 'legal_privacy_url',
                    'value' => ''
                ],
                [
                    'name' => 'legal_terms_url',
                    'value' => ''
                ],
                [
                    'name' => 'title',
                    'value' => 'CloudPolly - Text to Speech Converter'
                ],
                [
                    'name' => 'author',
                    'value' => 'Berkine'
                ],
                [
                    'name' => 'keywords',
                    'value' => 'cloud, text to speech, tts, berkine, cloudpolly, polly, wavenet, watson, azure, aws, gcp, ibm'
                ],
                [
                    'name' => 'description',
                    'value' => 'Cloud Polly - Ultimate Text to Speech Converter'
                ],
                

            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
