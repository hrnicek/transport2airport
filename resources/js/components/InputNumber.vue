<template>
  <div class="relative flex items-center border border-gray-200 rounded-lg">
    <div class="grow">
      <div class="relative">
        <input type="number" :id="id" :name="name" :placeholder="placeholder" :value="modelValue"
          @input="handleInput"
          class="p-4 block w-full border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none pt-6 pb-2 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
          style="-moz-appearance: textfield;" min="1" max="7" />
        <label :for="id"
          class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none border border-transparent origin-[0_0] scale-90 translate-x-0.5 -translate-y-1.5 text-gray-500">{{ label }}</label>
      </div>
    </div>
    <div class="flex justify-end items-center gap-x-1.5 p-3">
      <button type="button" @click="decrease"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
        tabindex="-1" aria-label="Decrease" :disabled="modelValue <= 1">
        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
        </svg>
      </button>
      <button type="button" @click="increase"
        class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
        tabindex="-1" aria-label="Increase" :disabled="modelValue >= 7">
        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
          <path d="M12 5v14"></path>
        </svg>
      </button>
    </div>
  </div>
</template>

<script setup>
const props = defineProps(['id', 'name', 'placeholder', 'label', 'modelValue']);
const emit = defineEmits(['update:modelValue']);

const decrease = () => {
  const currentValue = parseInt(props.modelValue) || 1;
  if (currentValue > 1) {
    emit('update:modelValue', currentValue - 1);
  }
};

const increase = () => {
  const currentValue = parseInt(props.modelValue) || 1;
  if (currentValue < 7) {
    emit('update:modelValue', currentValue + 1);
  }
};

const handleInput = (event) => {
  let value = parseInt(event.target.value) || 1;
  if (value < 1) value = 1;
  if (value > 7) value = 7;
  emit('update:modelValue', value);
};
</script>