<template>
  <div class="relative flex items-center border border-gray-200">
    <div class="grow">
      <div class="relative">
        <select :id="id" :name="name" :value="modelValue"
          @change="$emit('update:modelValue', $event.target.value)"
          class="p-4 block w-full border-transparent rounded-lg text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none pt-6 pb-2">
          <option v-for="option in options" :key="option.value" :value="option.value">
            {{ option.text }}
          </option>
        </select>
        <label :for="id"
          class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none border border-transparent origin-[0_0] scale-90 translate-x-0.5 -translate-y-1.5 text-gray-500">{{ label }}</label>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

defineProps(['id', 'name', 'label', 'modelValue']);
defineEmits(['update:modelValue']);

const options = ref([
  { text: 'Vídeň - 4800 Kč', value: 'viden' },
  { text: 'Praha - 5800 Kč', value: 'praha' },
  { text: 'Ostrava - 2500 Kč', value: 'ostrava' },
  { text: 'Brno - 2000 Kč', value: 'brno' },
  { text: 'Katovice - 4800 Kč', value: 'katovice' },
  { text: 'Krakow - 5800 Kč', value: 'krakow' },
  { text: 'Bratislava - 4800 Kč', value: 'bratislava' },
]);
</script>