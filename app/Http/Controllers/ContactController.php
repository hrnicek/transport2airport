<?php

namespace App\Http\Controllers;

use Spatie\SchemaOrg\Schema;

class ContactController extends Controller
{
    public function index()
    {
        seo()->title('Kontakt');

        $schema = Schema::localBusiness()
            ->name('Transport2Airport')
            ->email('info@transport2airport.cz')
            ->telephone('+420 737 171 549')
            ->address(Schema::postalAddress()
                ->streetAddress('Zikmundova 18')
                ->addressLocality('Olomouc')
                ->postalCode('779 00')
                ->addressCountry('CZ'))
            ->taxID('23480238');

        seo()->jsonLdImport($schema);

        return view('contact');
    }
}
