<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Insert FAQ data
        DB::table('faqs')->insert([
            [
                'question' => 'Odkud a kam jezdíte?',
                'answer' => 'Jezdíme především z Olomouce a okolí na letiště: Vídeň, Praha, Ostrava, Brno, Katovice a Bratislava. Na přání zajistíme i jinou destinaci.',
                'order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Jak si mohu objednat přepravu?',
                'answer' => 'Objednat lze jednoduše přes telefon, e-mail nebo kontaktní formulář na webu. Doporučujeme rezervovat alespoň 24 hodin předem.',
                'order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Kolik stojí přeprava na letiště?',
                'answer' => 'Cena závisí na cílovém letišti a počtu osob. Přesný ceník naleznete na našich stránkách nebo vám cenu sdělíme při objednávce.',
                'order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Je možné platit kartou?',
                'answer' => 'Ano, nabízíme možnost platby hotově i platební kartou. U firemních zákazníků i fakturací.',
                'order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Kolik osob se vejde do vozu?',
                'answer' => 'Používáme moderní a prostorné vozy (Citroën Spacetourer) s kapacitou až 8 osob + zavazadla.',
                'order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Vyzvednete mě doma?',
                'answer' => 'Ano, vyzvedneme vás přímo na uvedené adrese a dopravíme až k odletové hale letiště.',
                'order' => 6,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Co když má let zpoždění?',
                'answer' => 'Lety sledujeme online – přizpůsobíme čas odjezdu i příjezdu podle aktuální situace.',
                'order' => 7,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Poskytujete i zpáteční přepravu?',
                'answer' => 'Ano, stačí si rezervovat i cestu z letiště. Řidič vás vyzvedne v příletové hale s cedulkou se jménem.',
                'order' => 8,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Je možné cestovat s dětmi?',
                'answer' => 'Samozřejmě, máme k dispozici dětské sedačky a podsedáky. Stačí nahlásit při rezervaci.',
                'order' => 9,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Jak velká zavazadla si mohu vzít?',
                'answer' => 'Standardně se vejde jedno velké a jedno příruční zavazadlo na osobu. Větší počet kufrů je možné domluvit předem.',
                'order' => 10,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Nabízíte i individuální (soukromou) přepravu?',
                'answer' => 'Ano, lze si objednat i privátní transfer, kdy jede vůz pouze pro vás a vaše blízké.',
                'order' => 11,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Co když potřebuji zrušit rezervaci?',
                'answer' => 'Rezervaci můžete zdarma zrušit do 24 hodin před odjezdem. Při pozdějším zrušení účtujeme storno poplatek.',
                'order' => 12,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
