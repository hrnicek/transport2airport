<?php

namespace App\Http\Controllers;

use Spatie\SchemaOrg\Schema;

class HomeController extends Controller
{
    public function index()
    {
        seo()->title('Odvoz na letiště a osobní přeprava Olomouc a okolí.');

        // Vytvoření strukturovaných dat JSON-LD pro LocalBusiness
        $schema = Schema::localBusiness()
            ->name('Transport2Airport')
            ->description('Odvoz na letiště a osobní přeprava Olomouc a okolí.')
            ->email('info@transport2airport.cz')
            ->telephone('+420 737 171 549')
            ->taxID('23480238')
            ->image('/img/logo-icon.svg')
            ->logo('/img/logo-icon.svg')
            ->address(
                Schema::postalAddress()
                    ->streetAddress('Zikmundova 18')
                    ->addressLocality('Olomouc')
                    ->postalCode('779 00')
                    ->addressCountry('CZ')
            )
            ->geo(
                Schema::geoCoordinates()
                    ->latitude(49.5938) // Přibližné souřadnice Olomouce
                    ->longitude(17.2509)
            )
            ->openingHoursSpecification([
                Schema::openingHoursSpecification()
                    ->dayOfWeek(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'])
                    ->opens('06:00')
                    ->closes('22:00'),
                Schema::openingHoursSpecification()
                    ->dayOfWeek(['Saturday', 'Sunday'])
                    ->opens('07:00')
                    ->closes('22:00'),
            ])
            ->priceRange('$$')
            ->paymentAccepted(['cash', 'credit card'])
            ->areaServed('Olomouc a okolí')
            ->url('https://transport2airport.cz')
            // ->sameAs([
            //     'https://www.facebook.com/transport2airport',
            //     'https://www.instagram.com/transport2airport',
            // ])
            ->additionalType('http://www.productontology.org/id/Taxi_service')
            ->additionalType('http://www.productontology.org/id/Airport_transfer')
            ->potentialAction(
                Schema::reserveAction()
                    ->target('https://transport2airport.cz/#contact')
            )
            ->hasOfferCatalog(
                Schema::offerCatalog()
                    ->name('Služby přepravy')
                    ->itemListElement([
                        Schema::offer()
                            ->name('Odvoz na letiště')
                            ->description('Spolehlivá přeprava na letiště z Olomouce a okolí')
                            ->availability('https://schema.org/InStock'),
                        Schema::offer()
                            ->name('Osobní přeprava')
                            ->description('Komfortní osobní přeprava po celé ČR i zahraničí')
                            ->availability('https://schema.org/InStock'),
                    ])
            );

        // Import JSON-LD schématu do SEO
        seo()->jsonLdImport($schema);

        return view('welcome');
    }
}
