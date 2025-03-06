<script setup>
import { ref, computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import App from './App.vue'

const props = usePage().props;
const search = ref("");

const filteredCars = computed(() =>
  props.cars.filter(car =>
    (`${car.make} ${car.model}`).toLowerCase().includes(search.value.toLowerCase())
  )
);
</script>
<template>
<App>
 <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Cars List</h1>

    <!-- Search Bar -->
    <input
      v-model="search"
      type="text"
      placeholder="Search Cars..."
      class="p-2 border rounded w-full mb-4"
    />

    <!-- Cars List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div
        v-for="car in filteredCars"
        :key="car.id"
        class="border p-4 rounded shadow"
      >
        <h2 class="text-lg font-semibold">{{ car.make }} - {{ car.model }}</h2>
        <p>Year: {{ car.year }}</p>
        <p>Miles: {{ car.miles }}</p>
      </div>
    </div>
  </div>
  </App>
</template>




