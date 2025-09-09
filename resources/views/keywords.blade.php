@extends('layouts.app')

@section('content')
  <div class="py-24 bg-white sm:py-32">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Doprava na letiště</h1>
        <p class="mt-3 text-lg text-gray-600">Kompletní průvodce letištními transfery z Olomouce a okolí</p>
      </div>
      <div class="flex flex-wrap gap-5 mt-10 text-base font-semibold text-gray-900">
        <a href="#zakladni-informace" class="hover:text-primary">Základní informace</a>
        <a href="#letistni-transfery" class="hover:text-primary">Letištní transfery</a>
        <a href="#ceny" class="hover:text-primary">Ceny dopravy</a>
        <a href="#rezervace" class="hover:text-primary">Rezervace</a>
        <a href="#faq" class="hover:text-primary">Časté dotazy</a>
      </div>

      <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-24">
        <article id="zakladni-informace" class="flex flex-col lg:flex-row">
          <div class="w-full">
            <h2 class="text-2xl font-semibold text-gray-900">
              Spolehlivá doprava na letiště
            </h2>
            <p class="mt-6 text-gray-600 text-lg">
              Nabízíme <strong>spolehlivou dopravu na letiště</strong> z Olomouce a okolí. Naše služby zahrnují
              <strong>odvoz na letiště</strong> Praha (Václava Havla), Vídeň, Brno, Ostrava a další. Zajišťujeme komfortní
              <strong>přepravu na letiště</strong> pro jednotlivce, rodiny i skupiny.
            </p>
            <p class="mt-5 text-gray-600 text-lg">
              Náš <strong>letištní transfer</strong> zahrnuje vyzvednutí na vámi určeném místě, bezpečnou jízdu na letiště
              a pomoc se zavazadly. Díky našim zkušeným řidičům a moderním vozům je <strong>taxi na letiště</strong> s
              námi vždy pohodlné a bezproblémové.
            </p>
          </div>
        </article>

        <article id="letistni-transfery" class="flex flex-col lg:flex-row">
          <div class="w-full">
            <h2 class="text-2xl font-semibold text-gray-900">
              Letištní transfery na míru
            </h2>
            <p class="mt-6 text-gray-600 text-lg">
              Naše <strong>letištní transfery</strong> jsou přizpůsobeny vašim potřebám. Nabízíme <strong>odvoz z Olomouce
                na letiště Praha</strong>, <strong>přepravu na letiště Vídeň z Olomouce</strong> a další destinace.
              Všechny naše <strong>transfery na letiště</strong> jsou realizovány komfortními vozy Cupra Formentor a
              Citroen SpaceTourer.
            </p>
            <p class="mt-5 text-gray-600 text-lg">
              Poskytujeme <strong>osobní přepravu na letiště</strong> s důrazem na přesnost a spolehlivost. Náš
              <strong>soukromý odvoz na letiště</strong> vám zajistí klidný začátek vaší cesty bez stresu z parkování nebo
              hledání dopravního spojení.
            </p>
          </div>
        </article>

        <article id="ceny" class="flex flex-col lg:flex-row">
          <div class="w-full">
            <h2 class="text-2xl font-semibold text-gray-900">
              Ceny dopravy na letiště
            </h2>
            <p class="mt-6 text-gray-600 text-lg">
              Nabízíme transparentní <strong>ceny taxi na letiště</strong> bez skrytých poplatků. <strong>Cena dopravy na
                letiště</strong> závisí na vzdálenosti, typu vozu a počtu cestujících. Poskytujeme <strong>levnou dopravu
                na letiště Praha</strong> i další destinace s ohledem na kvalitu služeb.
            </p>
            <p class="mt-5 text-gray-600 text-lg">
              Pro přesnou <strong>cenu taxi na letiště</strong> z vašeho místa nás neváhejte kontaktovat. Kompletní ceník
              najdete na stránce <a href="{{ route('pricing') }}"
                class="font-semibold text-primary hover:text-primary-dark">Ceník</a>.
            </p>
          </div>
        </article>

        <article id="rezervace" class="flex flex-col lg:flex-row">
          <div class="w-full">
            <h2 class="text-2xl font-semibold text-gray-900">
              Rezervace transferu na letiště
            </h2>
            <p class="mt-6 text-gray-600 text-lg">
              <strong>Rezervace transferu na letiště</strong> je s námi jednoduchá a rychlá. Stačí vyplnit formulář na
              úvodní stránce, zavolat na +420 737 171 549 nebo napsat na info@transport2airport.cz. Pro <strong>objednání
                odvozu na letiště</strong> potřebujeme znát místo vyzvednutí, cílové letiště, datum a čas odletu a počet
              osob.
            </p>
            <p class="mt-5 text-gray-600 text-lg">
              Po <strong>rezervaci odvozu na letiště</strong> obdržíte potvrzení s detaily vaší cesty. Náš řidič vás
              vyzvedne na domluveném místě s dostatečným předstihem před odletem, abyste měli dostatek času na odbavení.
            </p>
          </div>
        </article>

        <article id="faq" class="flex flex-col">
          <h2 class="text-2xl font-semibold text-gray-900">
            Časté dotazy o dopravě na letiště
          </h2>

          <div class="mt-8 space-y-8 text-gray-600 text-lg">
            <div class="space-y-3">
              <h3 class="text-xl font-semibold text-gray-900">Jak si objednat odvoz na letiště?</h3>
              <p>Odvoz na letiště si můžete objednat jednoduše přes náš online formulář, telefonicky na čísle +420 737 171
                549 nebo e-mailem na info@transport2airport.cz. Stačí uvést místo vyzvednutí, cílové letiště, datum a čas
                odletu a počet osob.</p>
            </div>

            <div class="space-y-3">
              <h3 class="text-xl font-semibold text-gray-900">Kolik stojí doprava na letiště Praha z Olomouce?</h3>
              <p>Cena dopravy na letiště Václava Havla v Praze z Olomouce začíná na 5500 Kč za vůz Cupra. Kompletní ceník
                najdete na stránce <a href="{{ route('pricing') }}"
                  class="font-semibold text-primary hover:text-primary-dark">Ceník</a>.</p>
            </div>

            <div class="space-y-3">
              <h3 class="text-xl font-semibold text-gray-900">Jaké letištní transfery nabízíte?</h3>
              <p>Nabízíme letištní transfery z Olomouce a okolí na letiště Praha (Václava Havla), Vídeň (Vienna Airport),
                Brno, Ostrava, Katovice, Krakov a Bratislava. Zajišťujeme také přepravu na jakékoliv jiné letiště dle
                dohody.</p>
            </div>

            <div class="space-y-3">
              <h3 class="text-xl font-semibold text-gray-900">Je v ceně odvozu na letiště zahrnuto parkování a čekání?</h3>
              <p>Ano, v ceně letištního transferu je zahrnuto parkování i přiměřená doba čekání. Při zpátečních cestách z
                letiště sledujeme aktuální informace o příletu, takže se nemusíte obávat zpoždění.</p>
            </div>

            <div class="space-y-3">
              <h3 class="text-xl font-semibold text-gray-900">Jaké vozy používáte pro přepravu na letiště?</h3>
              <p>Pro dopravu na letiště používáme komfortní vozy Cupra Formentor a Citroen SpaceTourer. Všechny vozy jsou
                klimatizované, pravidelně čištěné a nabízejí dostatek prostoru pro cestující i zavazadla.</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
@endsection
