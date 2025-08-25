<div class="bg-white p-6 rounded-lg shadow-lg">
  <form>
    <div class="grid grid-cols-1 md:grid-cols-7 gap-4">
      <x-input type="text" name="from" id="from" placeholder="Napište adresu" label="Odkud" />
      <x-input type="text" name="to" id="to" placeholder="Napište adresu" label="Kam" />
      <x-input type="date" name="departure" id="departure" placeholder="dd.mm.rrrr" label="odjezd *" />
      <x-input-number name="people" id="people" placeholder="0" label="Osob *" />
      <x-input type="email" name="email" id="email" placeholder="vas@email.cz" label="E-mail *" />
      <x-input type="tel" name="phone" id="phone" placeholder="774567889" label="Telefon *" />
      <div class="flex items-end">
        <button type="submit"
          class="bg-primary hover:bg-primary/90 text-white font-bold py-2 px-4 rounded w-full">Rezervovat</button>
      </div>
    </div>
  </form>
</div>
