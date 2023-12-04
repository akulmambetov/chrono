<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm, Link} from '@inertiajs/vue3';
import {ChevronRightIcon} from '@heroicons/vue/24/solid';
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
  workspaces: {
    type: Object,
    required: false
  }
})

const form = useForm({
  name: null
})

const submit = () => {
  form.post(route('workspaces.store'), {
    onSuccess: () => form.reset()
  });
}


</script>

<template>
  <Head title="Dashboard"/>

  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>Dashboard</div>
    </template>

    <Link
      v-for="workspace in workspaces"
      class="p-12 block border rounded-md text-lg"
      :href="route('workspaces.show', workspace)">
      {{ workspace.name }}
    </Link>

    <div v-if="!workspaces.length">
      <span class="text-2xl font-bold">To get started, create a workspace</span>

      <form @submit.prevent="submit">
        <div class="grid grid-cols-1">
          <label for="name">Workspace Name <span class="text-red-600">*</span></label>
          <input class="rounded-md mt-2"
                 id="name" type="text"
                 v-model="form.name"
                 placeholder="Workspace name"
                 required
                 autofocus>
          <span class="text-sm text-red-600" v-show="form.errors.name">{{ form.errors.name }}</span>
        </div>

        <span class="border-b-2"></span>

        <PrimaryButton class="mt-2" type="submit">Save</PrimaryButton>
      </form>
    </div>
  </AuthenticatedLayout>
</template>
