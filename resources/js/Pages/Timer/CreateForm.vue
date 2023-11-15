<script setup>
import {useForm, usePage} from '@inertiajs/vue3';
import {computed, reactive, onMounted, onBeforeMount, ref, watch} from 'vue';
import {PauseIcon, PlayIcon, StopCircleIcon} from '@heroicons/vue/24/solid';

const page = usePage();

const form = useForm({
  title: null,
  started_at: null,
  stopped_at: null,
  intervalId: null
});

const hours = ref(0);
const minutes = ref(0);
const seconds = ref(0);

const error = ref(false);

const formatTime = (value) => {
  return value.toString().padStart(2, '0');
};

const updateDifferences = () => {
  const startDate = new Date(form.started_at);
  const endDate = new Date();

  const timeDifference = endDate - startDate;

  hours.value = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  minutes.value = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
  seconds.value = Math.floor((timeDifference % (1000 * 60)) / 1000);
};

const start = () => {

  if (!form.title) {
    error.value = !form.title;

    return;
  } else {
    error.value = false;
  }

  form.started_at = new Date();

  form.intervalId = setInterval(updateDifferences, 1000);

  localStorage.setItem('timer', JSON.stringify(form));
};

const stop = () => {
  form.stopped_at = new Date();

  hours.value = 0;
  minutes.value = 0;
  seconds.value = 0;

  clearInterval(form.intervalId);

  localStorage.clear();

  form.post(route('timer.store'));

  form.reset();
}

onBeforeMount(() => {
  if (localStorage.getItem('timer') !== null) {
    let timer = JSON.parse(localStorage.getItem('timer'));


    form.started_at = new Date(timer.started_at);
    form.title = timer.title;

    updateDifferences();

    form.intervalId = setInterval(updateDifferences, 1000);
  }
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
            :placeholder="error ? 'This field is required' : 'Title'"
            type="text" name="title" v-model="form.title">
        </div>

        <div class="w-26 p-1">
          {{ formatTime(hours) }} : {{ formatTime(minutes) }} : {{ formatTime(seconds) }}
        </div>

        <div>
          <PlayIcon @click="start" :disabled="form.processing" v-if="!form.started_at" class="h-5 cursor-pointer"/>

          <div v-else class="flex">
            <button type="submit" :disabled="form.processing">
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
