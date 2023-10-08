<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TableLayout from '@/Components/TableLayout.vue';
import {Head, Link} from '@inertiajs/vue3';

defineProps({
  workspaces: Object
})

</script>

<template>
  <Head title="Workspaces"/>

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">

            <Link :href="route('workspaces.create')">
              <PrimaryButton>
                Create new Workspace
              </PrimaryButton>
            </Link>

            <TableLayout class="mt-6">
              <template #head>
                <tr>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </template>

              <template #body>
                <tr v-for="workspace in workspaces">
                  <th>{{ workspace.name }}</th>
                </tr>
              </template>
            </TableLayout>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
