<script setup>
import {nextTick, ref} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Modal from "@/Components/Modal.vue";
import {useForm, router} from "@inertiajs/vue3"

const confirmingSetDefault = ref(false);

const props = defineProps({
  workspace: {
    required: true
  }
})

const form = useForm({
  'workspace': props.workspace
})

const confirmSetDefault = () => {
  confirmingSetDefault.value = true;
};

const closeModal = () => {
  confirmingSetDefault.value = false;
};

const setDefault = () => {
  form.put(route('workspaces.set-default', props.workspace), {
    onFinish: () => closeModal()
  })
};
</script>

<template>
  <div>
    <span class="px-5 py-1 rounded text-white cursor-pointer"
          @click="confirmSetDefault"
          title="Set Default"
          :class="{'bg-green-500': props.workspace.default, 'bg-red-500': !props.workspace.default}">{{
        props.workspace.default ? 'Yes' : 'No'
      }}</span>

    <Modal v-if="!props.workspace.default" :show="confirmingSetDefault" @close="closeModal">
      <div class="p-6">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
          Are you sure you want to make this the default project?
        </h2>

        <div class="mt-6 flex justify-end">
          <SecondaryButton @click="closeModal"> Cancel</SecondaryButton>

          <PrimaryButton
            class="ml-3"
            @click="setDefault"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Set Default
          </PrimaryButton>
        </div>
      </div>
    </Modal>
  </div>
</template>
