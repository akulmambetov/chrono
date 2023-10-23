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
    <template #breadcrumbs>
      <div>Workspaces </div>
      <div class="flex fill-gray-400"><box-icon name='chevron-right'></box-icon></div>
      <div>{{ workspace.name }}</div>
    </template>
    <h2>
      {{ workspace.name }}
    </h2>
  </AuthenticatedLayout>
</template>

<style scoped>

</style>
