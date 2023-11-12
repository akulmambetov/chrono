<script setup>
defineProps({
  entities: {
    type: Object,
    default: null
  },
  titles: {
    type: Array
  }
})
</script>

<template>
  <div class="relative overflow-x-auto rounded-md">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
        <slot name="head"></slot>
      </thead>
      <tbody>
        <slot name="body"></slot>
      </tbody>
    </table>
  </div>
</template>
