<script setup>
  import {usePage, Link} from "@inertiajs/vue3";
  import {computed} from "vue";

  const page = usePage();

  const defaultWorkspace = page.props.auth.default_workspace;
</script>

<template>
  <div>
    <div class="flex flex-col justify-center gap-3 mt-6">
      <Link v-if="defaultWorkspace" class="flex flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm"
            :href="route('workspaces.show', defaultWorkspace)">
        <box-icon class="mr-3" type='solid' name='grid'></box-icon>
        {{ defaultWorkspace.name }}
      </Link>

      <Link class="flex flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm"
            :href="route('timer.index')">
        <box-icon class="mr-3" type='solid' name='time'></box-icon>
        Timer
      </Link>

      <Link class="flex flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm">
        <box-icon class='mr-3' name='user-rectangle' type='solid' ></box-icon>
        Users
      </Link>

      <Link class="flex flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm">
        <box-icon class='mr-3' name='report' type='solid' ></box-icon>
        Reports
      </Link>
    </div>
  </div>
</template>
