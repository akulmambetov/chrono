<script setup>
import Workspaces from "@/Layouts/Partials/Workspaces.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link, usePage} from "@inertiajs/vue3";
import {computed, ref} from 'vue'
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
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
  <Transition name="slide">
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


          <div>
            <Dropdown width="36">
              <template #trigger>
                <button class="flex items-center group rounded cursor-pointer p-1 hover:bg-gray-300">
                  <box-icon class="fill-gray-500 group-hover:fill-gray-950" name='user'></box-icon>
                </button>
              </template>

              <template #content>
                <DropdownLink :href="route('profile.edit')"> Profile</DropdownLink>
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
.slide-enter {
  transform: translateX(-300px);
}

.slide-enter-active {
  transition: all .3s ease-in;
}

.slide-leave-active {
  transition: all .3s ease-in;
}
.slide-leave-to {
  transform: translateX(-300px);
}
</style>
