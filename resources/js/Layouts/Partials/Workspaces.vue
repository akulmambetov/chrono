<script setup>
  import {usePage, Link} from "@inertiajs/vue3";
  import {computed} from "vue";

  const page = usePage();

  const workspaces = computed(() => page.props.auth.workspaces);
</script>

<template>
  <div class="flex flex-col justify-center gap-1">
    <div v-for="workspace in workspaces" class="bg-white cursor-pointer hover:bg-gray-50 rounded py-1 mx-6 text-gray-900 border text-center text-sm">
      <Link :href="route('workspaces.show', workspace)">{{ workspace.name }}</Link>
    </div>
    <div class="bg-white hover:bg-gray-50 cursor-pointer rounded py-1 mx-6 text-gray-900 border text-center text-sm">
      <Link :href="route('workspaces.create')">Add new</Link>
    </div>
  </div>
</template>
