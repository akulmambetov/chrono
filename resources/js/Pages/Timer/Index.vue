<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";

</script>

<template>
  <Head title="Timer"></Head>
  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>{{ $page.props.auth.default_workspace.name }} </div>
      <div class="flex fill-gray-400"><box-icon name='chevron-right'></box-icon></div>
      <div>Timer</div>
    </template>


  </AuthenticatedLayout>
</template>
