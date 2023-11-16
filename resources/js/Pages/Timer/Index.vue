<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import {ChevronRightIcon} from '@heroicons/vue/24/solid';
import TableLayout from "@/Components/TableLayout.vue";
import CreateForm from "@/Pages/Timer/CreateForm.vue";

defineProps({
  timers: {
    type: Object,
    required: true
  }
})

</script>

<template>
  <Head title="Timer"></Head>

  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>{{ $page.props.auth.default_workspace.name }}</div>
      <ChevronRightIcon class="h-3 text-gray-500"/>
      <div>Timer</div>
    </template>

    <div>
      <CreateForm></CreateForm>

      <TableLayout>
        <template #head>
          <tr>
            <th class="p-3">Title</th>
            <th class="p-3">Hours</th>
          </tr>
        </template>

        <template #body>
          <tr v-for="timer in timers">
            <td class="p-3">{{ timer.title }}</td>
            <td class="p-3">
              {{ timer.difference_time }}
            </td>
          </tr>
        </template>
      </TableLayout>
    </div>
  </AuthenticatedLayout>
</template>
