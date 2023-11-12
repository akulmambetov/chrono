<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import {Head} from '@inertiajs/vue3';
import {ChevronRightIcon} from '@heroicons/vue/24/solid';

defineProps({
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});
</script>

<template>
  <Head title="Profile"/>

  <AuthenticatedLayout>
    <template #breadcrumbs>
      <div>Profile</div>
      <ChevronRightIcon class="h-3 text-gray-500"/>
      <div>{{ $page.props.auth.user.name }}</div>
    </template>


    <UpdateProfileInformationForm
      :must-verify-email="mustVerifyEmail"
      :status="status"
      class="max-w-xl"
    />

    <div class="border-b-2"></div>

    <UpdatePasswordForm class="max-w-xl"/>

    <div class="border-b-2"></div>

    <DeleteUserForm class="max-w-xl"/>
  </AuthenticatedLayout>
</template>
