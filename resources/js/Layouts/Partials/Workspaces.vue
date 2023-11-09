<script setup>
  import {usePage, Link} from "@inertiajs/vue3";
  import {computed} from "vue";
  import {ClockIcon, UserIcon, ClipboardDocumentListIcon, InboxStackIcon} from '@heroicons/vue/24/solid'

  const page = usePage();

  const defaultWorkspace = page.props.auth.default_workspace;
</script>

<template>
  <div>
    <div class="flex flex-col justify-center gap-3 mt-6">
      <Link v-if="defaultWorkspace" class="flex group flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm"
            :href="route('workspaces.show', defaultWorkspace)">
        <InboxStackIcon class="h-5 mr-3 text-gray-500 group-hover:text-blue-500"/>
        {{ defaultWorkspace.name }}
      </Link>

      <Link class="flex group flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm"
            :href="route('timer.index')">
        <ClockIcon class="h-5 mr-3 text-gray-500 group-hover:text-blue-500"/>
        Timer
      </Link>

      <Link class="flex group flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm">
        <UserIcon class="h-5 mr-3 text-gray-500 group-hover:text-blue-500"/>
        Users
      </Link>

      <Link class="flex group flex-row hover:text-blue-500 items-center cursor-pointer hover:bg-gray-300 rounded-md p-2 mx-6 text-gray-900 text-sm">
        <ClipboardDocumentListIcon class="h-5 mr-3 text-gray-500 group-hover:text-blue-500"/>
        Reports
      </Link>
    </div>
  </div>
</template>
