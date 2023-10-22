<script setup>
import UserBar from "@/Layouts/Partials/UserBar.vue";
import Workspaces from "@/Layouts/Partials/Workspaces.vue";
</script>

<template>
  <div class="max-w-7xl w-64 bg-gray-50 border-r h-full fixed left-0 flex flex-col">
    <UserBar></UserBar>
    <Workspaces></Workspaces>
  </div>
</template>
