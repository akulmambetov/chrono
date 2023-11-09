<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link, useForm, usePage} from '@inertiajs/vue3';
import {ChevronRightIcon} from '@heroicons/vue/24/solid';

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
      <ChevronRightIcon class="h-3 text-gray-500"/>
      <div>{{ workspace.name }}</div>
    </template>
    <h2>
      {{ workspace.name }}
    </h2>
  </AuthenticatedLayout>
</template>

<style scoped>

</style>
