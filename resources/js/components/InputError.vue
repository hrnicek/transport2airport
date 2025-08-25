<script setup>
defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message" class="-py-1">
        <p class="text-xs text-red-200 dark:text-red-400">
            {{ message }}
        </p>
    </div>
</template>