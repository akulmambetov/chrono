<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';

import {Head, Link, useForm, usePage} from '@inertiajs/vue3';

const user = usePage().props.auth.user;

const form = useForm({
  name: null
});

</script>

<template>
  <Head title="Create Workspace"/>

  <AuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <form @submit.prevent="form.post(route('workspaces.store'))" class="px-6 py-6">
            <div>
              <InputLabel for="name" value="Name" />

              <TextInput
                id="name"
                type="text"
                class="mt-1 block w-3/4"
                v-model="form.name"
                required
                autofocus
                autocomplete="name"
              />

              <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-6">
              <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
