<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link} from "@inertiajs/vue3";

</script>

<template>
  <div class="px-4 h-12 flex justify-between items-center">
    <Link :href="route('home')"> <ApplicationLogo class="h-6"></ApplicationLogo></Link>

    <box-icon class="fill-gray-500" name='dock-left'></box-icon>
  </div>
</template>
