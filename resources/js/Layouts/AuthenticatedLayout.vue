<script setup>
import {ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/vue3';
import Sidebar from "@/Layouts/Partials/Sidebar.vue";

const showingNavigationDropdown = ref(false);

const showSideBar = ref(true);

const closeSideBar = () => {
  showSideBar.value = false;
};

</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <!-- Primary Navigation Menu -->
        <Sidebar :showSideBar="showSideBar" @close="closeSideBar"></Sidebar>

        <div class="border-b">
          <div class="text-xs text-gray-400 flex justify-start px-4 py-6 mx-4 items-center content-center h-12" :class="{'pl-64': showSideBar}">
            <div class="flex">
              <div class="m-1 p-2 group rounded cursor-pointer hover:bg-gray-300 flex items-center"
                   v-if="!showSideBar"
                   @click="showSideBar = !showSideBar">
                <box-icon class="fill-gray-500 group-hover:fill-gray-950" name='dock-left'></box-icon>
              </div>
            </div>

            <slot name="breadcrumbs">
            </slot>
          </div>
        </div>
      </nav>

      <!-- Page Content -->
      <main :class="{'pl-64': showSideBar}">
        <div class="py-4 px-4">
          <div class="max-w-7xl space-y-6">
            <slot/>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>
