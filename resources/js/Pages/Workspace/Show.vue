<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link, useForm, usePage} from '@inertiajs/vue3';

defineProps({
  workspace: {
    type: Object
  },
});

</script>

<template>
  <Head :title="workspace.name"/>

  <AuthenticatedLayout>
    <h2>
      {{ workspace.name }}
    </h2>
  </AuthenticatedLayout>
</template>

<style scoped>

</style>
