<template>
  <div class="flex relative items-center border border-gray-200">
    <div class="grow">
      <div class="relative">
        <select :id="id" :name="name" :value="modelValue"
          @change="$emit('update:modelValue', $event.target.value)"
          class="block p-4 pt-6 pb-2 w-full text-sm rounded-lg border-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none">
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
  { text: 'Vídeň', value: 'viden' },
  { text: 'Praha', value: 'praha' },
  { text: 'Ostrava', value: 'ostrava' },
  { text: 'Brno', value: 'brno' },
  { text: 'Katovice', value: 'katovice' },
  { text: 'Krakow', value: 'krakow' },
  { text: 'Bratislava', value: 'bratislava' },
]);
</script>