<script setup>
import { ref } from 'vue';
import Input from './Input.vue';
import InputNumber from './InputNumber.vue';
import axios from 'axios';
import Toggle from './Toggle.vue';
import SelectAirport from './SelectAirport.vue';
import InputError from './InputError.vue';

const hasNote = ref(false);
const errors = ref({});
const loading = ref(false);

const form = ref({
  airport: false,
  from: '',
  to: '',
  date: '',
  people: 1,
  email: '',
  phone: '',
  note: '',
});

const submitForm = async () => {
  try {
    loading.value = true;
    errors.value = {}; // Clear previous errors
    const response = await axios.post('/api/demands', form.value);
    console.log(response.data);
    // Reset form on success
    form.value = {
      airport: false,
      from: '',
      to: '',
      date: '',
      people: 1,
      email: '',
      phone: '',
      note: '',
    };
  } catch (error) {
    if (error.response && error.response.status === 422) {
      errors.value = error.response.data.errors;

          loading.value = false;
    }
    console.error(error);
  } finally {
    loading.value = false;
  }
};
</script>

<template>
  <div class="bg-white p-6 rounded-lg shadow-lg">
    <form @submit.prevent="submitForm">
     <Toggle v-model:checked="form.airport" class="mb-4" />
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="relative">
          <Input type="text" name="from" id="from" placeholder="Napište adresu" label="Odkud" v-model="form.from" />
          <InputError :message="errors.from?.[0]" class="absolute top-full left-0 w-full" />
        </div>
        <div v-if="!form.airport" class="relative">
          <Input type="text" name="to" id="to" placeholder="Napište adresu" label="Kam" v-model="form.to" />
          <InputError :message="errors.to?.[0]" class="absolute top-full left-0 w-full" />
        </div>
        <div v-else class="relative">
          <SelectAirport name="to" id="to" label="Letiště" v-model="form.to" />
          <InputError :message="errors.to?.[0]" class="absolute top-full left-0 w-full" />
        </div>
        <div class="relative">
          <Input type="date" name="date" id="date" label="Datum *" v-model="form.date" />
          <InputError :message="errors.date?.[0]" class="absolute top-full left-0 w-full" />
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        <div class="relative">
          <InputNumber name="people" id="people" placeholder="0" label="Osob *" v-model="form.people" />
          <InputError :message="errors.people?.[0]" class="absolute top-full left-0 w-full" />
        </div>
        <div class="relative">
          <Input type="email" name="email" id="email" placeholder="vas@email.cz" label="E-mail *" v-model="form.email" />
          <InputError :message="errors.email?.[0]" class="absolute top-full left-0 w-full" />
        </div>
        <div class="relative">
          <Input type="tel" name="phone" id="phone" placeholder="774567889" label="Telefon *" v-model="form.phone" />
          <InputError :message="errors.phone?.[0]" class="absolute top-full left-0 w-full" />
        </div>
      </div>
      <div v-if="hasNote" class="mt-4">
        <div class="relative">
          <Input type="textarea" name="note" id="note" placeholder="Napište poznámku" label="Poznámka" v-model="form.note" />
          <InputError :message="errors.note?.[0]" class="absolute top-full left-0 w-full" />
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
        <div class="flex items-end">
          <button type="button"
            @click="hasNote = !hasNote"
            class="py-4 px-4 w-full border border-gray-200 hover:bg-gray-50"
            :class="{'bg-red-400 hover:bg-red-300 text-white': hasNote}"
            >
            <span v-if="!hasNote">
            Poznámka
            </span>
            <span v-else>
            Odebrat poznámku
            </span>
            </button>
        </div>
        <div class="col-span-2">
            
        </div>
        <div class="flex items-end col-span-1">
          <button type="submit"
            class="bg-primary hover:bg-primary/90 text-white font-bold py-4 px-4 w-full flex justify-center items-center">
        <span v-if="loading">
            Odesílání...
        </span>
        <span v-else>
            Rezervovat
        </span>
        <svg v-if="!loading" class="text-white w-5 h-5 ml-2 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="Layer 2"><g data-name="arrow-circle-right"><rect width="24" height="24" transform="rotate(-90 12 12)" opacity="0"/><path d="M17 12v-.09a.88.88 0 0 0-.06-.28.72.72 0 0 0-.11-.19 1 1 0 0 0-.09-.13l-2.86-3a1 1 0 0 0-1.45 1.38L13.66 11H8a1 1 0 0 0 0 2h5.59l-1.3 1.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l3-3a1 1 0 0 0 .21-.32A1 1 0 0 0 17 12z"/><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/></g></g></svg>
        </button>
        </div>
      </div>
    </form>
  </div>
</template>

