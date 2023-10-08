<template>
  <div class="">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-separate border border-slate-500">
      <thead class="text-xs text-white uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
      <slot name="head" />
      </thead>
      <tbody>
      <slot name="body" />
      </tbody>
    </table>
  </div>

</template>
