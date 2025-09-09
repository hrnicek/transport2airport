<?php

namespace App\Http\Controllers;

use Spatie\SchemaOrg\Schema;

class PricingController extends Controller
{
    public function index()
    {
        seo()->title('Ceník dopravy na letiště');

        // Vytvoření strukturovaných dat JSON-LD pro TaxiService
        $schema = Schema::taxiService()
            ->name('Transport2Airport - Rychlý odvoz na letiště')
            ->description('Garantujeme rychlou a bezpečnou dopravu na letiště z jakékoliv části města.')
            ->provider(
                Schema::localBusiness()
                    ->name('Transport2Airport')
                    ->telephone('+420 777 888 999')
                    ->image('/img/logo-icon.svg')
            )
            ->areaServed(
                Schema::city()
                    ->name('Olomouc')
            )
            ->serviceType('Airport transportation')
            ->offers([
                // Cupra nabídky
                Schema::offer()
                    ->name('Olomouc - Vídeň (Vienna Airport) - Cupra')
                    ->price(3600)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Praha (Letiště Václava Havla) - Cupra')
                    ->price(5500)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Ostrava (Ostrava Airport) - Cupra')
                    ->price(2000)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Brno (Brno Airport) - Cupra')
                    ->price(2000)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Katovice (Katovice Airport) - Cupra')
                    ->price(3600)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Krakow (Krakow Airport) - Cupra')
                    ->price(3900)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Bratislava (Bratislava Airport) - Cupra')
                    ->price(3600)
                    ->priceCurrency('CZK'),

                // Citroen nabídky
                Schema::offer()
                    ->name('Olomouc - Vídeň (Vienna Airport) - Citroen')
                    ->price(5200)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Praha (Letiště Václava Havla) - Citroen')
                    ->price(6900)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Ostrava (Ostrava Airport) - Citroen')
                    ->price(2800)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Brno (Brno Airport) - Citroen')
                    ->price(2800)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Katovice (Katovice Airport) - Citroen')
                    ->price(5200)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Krakow (Krakow Airport) - Citroen')
                    ->price(5500)
                    ->priceCurrency('CZK'),
                Schema::offer()
                    ->name('Olomouc - Bratislava (Bratislava Airport) - Citroen')
                    ->price(5200)
                    ->priceCurrency('CZK'),
            ]);

        // Import JSON-LD schématu do SEO
        seo()->jsonLdImport($schema);

        return view('pricing');
    }
}
