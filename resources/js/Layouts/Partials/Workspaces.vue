<script setup>
  import {usePage, Link} from "@inertiajs/vue3";
  import {computed} from "vue";

  const page = usePage();

  const defaultWorkspace = page.props.auth.default_workspace;
</script>

<template>
  <div class="flex flex-col justify-center gap-1">
    <div v-if="defaultWorkspace" class="bg-white cursor-pointer hover:bg-gray-50 rounded py-1 mx-6 text-gray-900 border text-center text-sm">
      <Link :href="route('workspaces.show', defaultWorkspace)">{{ defaultWorkspace.name }}</Link>
    </div>
    <div class="bg-white hover:bg-gray-50 cursor-pointer rounded py-1 mx-6 text-gray-900 border text-center text-sm">
      <Link :href="route('workspaces.create')">Add new</Link>
    </div>
  </div>
</template>
