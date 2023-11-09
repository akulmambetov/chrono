<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import {ChevronRightIcon} from '@heroicons/vue/24/solid';

</script>

<template>
  <Head title="Timer"></Head>
  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>{{ $page.props.auth.default_workspace.name }} </div>
      <ChevronRightIcon class="h-3 text-gray-500"/>
      <div>Timer</div>
    </template>


  </AuthenticatedLayout>
</template>
