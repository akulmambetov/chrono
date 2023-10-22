<script setup>
import Workspaces from "@/Layouts/Partials/Workspaces.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link, usePage} from "@inertiajs/vue3";
import {computed, ref} from 'vue'

const page = usePage()

const user = computed(() => page.props.auth.user)

defineProps({
  showSideBar: {
    type: Boolean,
    default: true
  }
})

const emit = defineEmits(['close']);

const emitSideBar = () => {
  emit('close');
}
</script>

<template>
  <Transition
    enter-from-class="opacity-0 translate-x-4"
    enter-to-class="opacity-100"
    leave-from-class="opacity-100 translate-x-4"
    leave-to-class="opacity-0"
  >
    <div v-show="showSideBar" class="max-w-7xl w-64 bg-gray-50 border-r h-full fixed left-0 flex flex-col">
      <div class="px-4 h-12 flex justify-between items-center">
        <div class="rounded cursor-pointer p-1 hover:bg-gray-300 content-center">
          <Link :href="route('home')">
            <ApplicationLogo class="h-6"></ApplicationLogo>
          </Link>
        </div>
        <div class="flex gap-3">
          <div class="group rounded cursor-pointer p-1 hover:bg-gray-300 flex items-center"
               @click="emitSideBar">
            <box-icon class="fill-gray-500 group-hover:fill-gray-950" name='dock-left'></box-icon>

          </div>

          <Link :href="route('profile.edit')"
                class="flex items-center group rounded cursor-pointer p-1 hover:bg-gray-300">
            <box-icon class="fill-gray-500 group-hover:fill-gray-950" name='user'></box-icon>
          </Link>
        </div>
      </div>
      <Workspaces></Workspaces>
    </div>
  </Transition>
</template>
