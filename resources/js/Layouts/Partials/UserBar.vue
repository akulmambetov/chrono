<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link, usePage} from "@inertiajs/vue3";
import {computed} from 'vue'

const page = usePage()

const user = computed(() => page.props.auth.user)

</script>

<template>
  <div class="px-4 h-12 flex justify-between items-center">
    <div>
      <Link :href="route('home')"> <ApplicationLogo class="h-6"></ApplicationLogo></Link>
    </div>
   <div class="flex gap-3">
     <box-icon class="fill-gray-500" name='dock-left'></box-icon>
     <box-icon class="fill-gray-500" name='user'></box-icon>
   </div>
  </div>
</template>
