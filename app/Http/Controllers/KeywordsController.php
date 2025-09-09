<?php

namespace App\Http\Controllers;

use Spatie\SchemaOrg\Schema;

class KeywordsController extends Controller
{
    public function index()
    {
        seo()->title('Doprava na letiště | Odvoz na letiště Praha, Vídeň, Brno z Olomouce');
        seo()->description('Spolehlivá doprava na letiště z Olomouce a okolí. Nabízíme odvoz na letiště Praha, Vídeň, Brno a další. Rezervujte si letištní transfer ještě dnes!');

        // Vytvoření strukturovaných dat JSON-LD pro FAQPage
        $schema = Schema::fAQPage()
            ->mainEntity([
                Schema::question()
                    ->name('Jak si objednat odvoz na letiště?')
                    ->acceptedAnswer(
                        Schema::answer()
                            ->text('Odvoz na letiště si můžete objednat jednoduše přes náš online formulář, telefonicky na čísle +420 737 171 549 nebo e-mailem na info@transport2airport.cz. Stačí uvést místo vyzvednutí, cílové letiště, datum a čas odletu a počet osob.')
                    ),
                Schema::question()
                    ->name('Kolik stojí doprava na letiště Praha z Olomouce?')
                    ->acceptedAnswer(
                        Schema::answer()
                            ->text('Cena dopravy na letiště Václava Havla v Praze z Olomouce začíná na 5500 Kč za vůz Cupra. Kompletní ceník najdete na stránce Ceník.')
                    ),
                Schema::question()
                    ->name('Jaké letištní transfery nabízíte?')
                    ->acceptedAnswer(
                        Schema::answer()
                            ->text('Nabízíme letištní transfery z Olomouce a okolí na letiště Praha (Václava Havla), Vídeň (Vienna Airport), Brno, Ostrava, Katovice, Krakov a Bratislava. Zajišťujeme také přepravu na jakékoliv jiné letiště dle dohody.')
                    ),
                Schema::question()
                    ->name('Je v ceně odvozu na letiště zahrnuto parkování a čekání?')
                    ->acceptedAnswer(
                        Schema::answer()
                            ->text('Ano, v ceně letištního transferu je zahrnuto parkování i přiměřená doba čekání. Při zpátečních cestách z letiště sledujeme aktuální informace o příletu, takže se nemusíte obávat zpoždění.')
                    ),
                Schema::question()
                    ->name('Jaké vozy používáte pro přepravu na letiště?')
                    ->acceptedAnswer(
                        Schema::answer()
                            ->text('Pro dopravu na letiště používáme komfortní vozy Cupra Formentor a Citroen SpaceTourer. Všechny vozy jsou klimatizované, pravidelně čištěné a nabízejí dostatek prostoru pro cestující i zavazadla.')
                    ),
            ]);

        // Import JSON-LD schématu do SEO
        seo()->jsonLdImport($schema);

        return view('keywords');
    }
}
