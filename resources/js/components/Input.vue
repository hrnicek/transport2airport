<template>
  <div class="relative flex items-center border border-gray-200">
    <div class="grow">
      <div class="relative">
        <input :type="type" :id="id" :name="name" :placeholder="placeholder" :value="modelValue" :min="min" :max="max"
          @input="$emit('update:modelValue', $event.target.value)"
          class="p-4 block w-full border-transparent rounded-lg text-sm placeholder:text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none pt-6 pb-2" />
        <label :for="id"
          class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none border border-transparent origin-[0_0] scale-90 translate-x-0.5 -translate-y-1.5 text-gray-500">{{ label }}</label>
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps(['type', 'id', 'name', 'placeholder', 'label', 'modelValue', 'min', 'max']);
defineEmits(['update:modelValue']);
</script>