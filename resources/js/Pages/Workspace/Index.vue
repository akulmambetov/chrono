<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import DangerButton from '@/Components/DangerButton.vue';
import TableLayout from '@/Components/TableLayout.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import Modal from '@/Components/Modal.vue';
import {Head, Link} from '@inertiajs/vue3';
import {nextTick, ref} from "vue";
import MakeDefault from "@/Pages/Workspace/Partials/MakeDefault.vue";

defineProps({
  workspaces: Object
})

const confirmingWorkspaceDeletion = ref(false);

const confirmUserDeletion = () => {
  confirmingWorkspaceDeletion.value = true;
};

const closeModal = () => {
  confirmingWorkspaceDeletion.value = false;
};

</script>

<template>
  <Head title="Workspaces"/>

  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>Workspaces</div>
    </template>

    <div>

      <Link :href="route('workspaces.create')">
        <PrimaryButton>
          Create new Workspace
        </PrimaryButton>
      </Link>

      <div v-if="workspaces.length">
        <TableLayout class="mt-6">
          <template #head>
            <tr>
              <th class="px-6 py-3">Name</th>
              <th class="px-6 py-3">Default</th>
              <th class="px-6 py-3">Action</th>
            </tr>
          </template>

          <template #body>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="workspace in workspaces">
              <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <Link :href="route('workspaces.show', workspace)">{{ workspace.name }}</Link>
              </th>
              <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              <MakeDefault :workspace="workspace"></MakeDefault>
              </th>
              <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Edit
              </th>
            </tr>
          </template>
        </TableLayout>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
