<script setup>
import {useForm} from '@inertiajs/vue3';
import {computed, onMounted, onBeforeUnmount, ref} from 'vue';
import {PauseIcon, PlayIcon, StopCircleIcon} from '@heroicons/vue/24/solid';
import moment from 'moment';

const form = useForm({
  title: '',
  started_at: '',
  stopped_at: '',
  time: null,
  intervalId: null
});

const error = ref(false);

const start = () => {

  if (!form.title) {
    error.value = !form.title;

    return;
  } else {
    error.value = false;
  }

  form.started_at = new Date();


  form.intervalId = setInterval(() => {
    form.time += 1;
  }, 1000);

  localStorage.setItem('timer', JSON.stringify(form));
};

const stop = () => {
  form.stopped_at = new Date();

  error.value = false;

  clearInterval(form.intervalId);

  form.post(route('timer.store'), {
    onFinish: () => form.reset(),
  });
}

const refresh = () => {
}

onMounted(() => {
  window.addEventListener('beforeunload', refresh);
})


</script>

<template>
  <div class="w-full mb-2">
    <form @submit.prevent="stop">
      <div class="flex flex-row gap-5 items-center">
        <div class="flex flex-col items-center">
          <input
            class="rounded-md p-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"
            :class="{'border-red-500': error}"
            type="text" name="title" v-model="form.title">

          <span v-show="error" class="text-red-500 font-extralight text-sm">
          Title field is required
        </span>
        </div>

        <div v-show="form.time">
          {{ form.time }}
        </div>

        <div>
          <PlayIcon @click="start" v-if="!form.started_at" class="h-5 cursor-pointer"/>

          <div v-else class="flex">
            <button type="submit">
              <StopCircleIcon class="h-5 cursor-pointer"/>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>

</style>
