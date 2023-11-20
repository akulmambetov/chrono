<script setup>
import Workspaces from "@/Layouts/Partials/Workspaces.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link, usePage} from "@inertiajs/vue3";
import {computed, ref} from 'vue'
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { UserCircleIcon, ArrowLeftOnRectangleIcon } from "@heroicons/vue/24/outline";

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
  <Transition name="slide-fade">
    <div v-show="showSideBar" class="max-w-7xl w-64 bg-gray-200 border-r h-full fixed left-0 flex flex-col">
      <div class="px-4 h-12 flex justify-between items-center">
        <div class="rounded cursor-pointer p-2 hover:bg-gray-300 content-center">
          <Link :href="route('dashboard')">
            <ApplicationLogo class="h-5"></ApplicationLogo>
          </Link>
        </div>
        <div class="flex gap-3">
          <div class="group rounded cursor-pointer p-2 hover:bg-gray-300 flex items-center"
               @click="emitSideBar">
            <ArrowLeftOnRectangleIcon class="h-5 text-gray-500 group-hover:text-gray-950"/>
          </div>


          <div>
            <Dropdown width="36">
              <template #trigger>
                <button class="flex items-center group rounded cursor-pointer p-2 hover:bg-gray-300">
                  <UserCircleIcon class="h-5 text-gray-500 group-hover:text-gray-950" />
                </button>
              </template>

              <template #content>
                <DropdownLink :href="route('profile.edit')"> Profile</DropdownLink>
                <DropdownLink :href="route('integration.index')">Integrations</DropdownLink>
                <DropdownLink :href="route('logout')" method="post" as="button">
                  Log Out
                </DropdownLink>
              </template>
            </Dropdown>
          </div>

        </div>
      </div>
      <Workspaces></Workspaces>
    </div>
  </Transition>
</template>

<style scoped>
.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(-256px);
  opacity: 0;
}
</style>
