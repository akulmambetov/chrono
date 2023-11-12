<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import {ChevronRightIcon} from '@heroicons/vue/24/solid';
import {Head, Link, useForm, usePage} from '@inertiajs/vue3';

const user = usePage().props.auth.user;

const form = useForm({
  name: null
});

</script>

<template>
  <Head title="Create Workspace"/>

  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>Workspaces</div>
      <ChevronRightIcon class="h-3 text-gray-500"/>
      <div>Create</div>
    </template>

    <form @submit.prevent="form.post(route('workspaces.store'))">
      <div>
        <InputLabel for="name" value="Name"/>

        <TextInput
          id="name"
          type="text"
          class="mt-1 block w-3/4"
          v-model="form.name"
          required
          autofocus
          autocomplete="name"
        />

        <InputError class="mt-2" :message="form.errors.name"/>
      </div>

      <div class="mt-6">
        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
      </div>
    </form>
  </AuthenticatedLayout>
</template>
