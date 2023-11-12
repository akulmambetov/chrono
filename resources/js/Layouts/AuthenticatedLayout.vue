<script setup>
import {onMounted, onUnmounted, ref} from 'vue';
import Sidebar from "@/Layouts/Partials/Sidebar.vue";
import {ArrowRightOnRectangleIcon} from '@heroicons/vue/24/solid';

const showingNavigationDropdown = ref(false);

const showSideBar = ref(true);

const closeSideBar = () => {
  showSideBar.value = false;
};

const checkSize = () => {
  showSideBar.value = window.innerWidth > 768;
};

onMounted(() => window.addEventListener('resize', checkSize));
onUnmounted(() => window.removeEventListener('resize', checkSize));


</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <!-- Primary Navigation Menu -->
        <Sidebar :showSideBar="showSideBar" @close="closeSideBar"></Sidebar>

        <div class="border-b">
          <div class="text-xs text-gray-400 flex items-center content-center h-12"
               :class="{
                'pl-64': showSideBar,
                'ml-4': showSideBar
                }">
            <div class="flex">
              <div class="m-1 p-2 group rounded cursor-pointer hover:bg-gray-300 flex items-center"
                   v-if="!showSideBar"
                   @click="showSideBar = !showSideBar">
                <ArrowRightOnRectangleIcon class="h-5 fill-gray-500 group-hover:fill-gray-950"/>
              </div>
            </div>

            <slot name="breadcrumbs">

            </slot>

            <div class="absolute right-0 mr-5 md:hidden">
              <h2>Profile</h2>
            </div>
          </div>
        </div>
      </nav>

      <!-- Page Content -->
        <main :class="{'pl-64': showSideBar}" class="ease-in-out duration-300">
          <div class="py-4 px-4">
            <div class="max-w-7xl space-y-6 md:container mx-auto bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-md p-6">
              <slot/>
            </div>
          </div>
        </main>
    </div>
  </div>
</template>
