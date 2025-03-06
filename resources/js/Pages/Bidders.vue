<script setup>
import { ref, computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import App from './App.vue'

const props = usePage().props;
const search = ref("");

const filteredBidders = computed(() =>
  props.bidders.filter(b =>
    (`${b.first_name} ${b.last_name}`).toLowerCase().includes(search.value.toLowerCase())
  )
);
</script>
<template>
<App>
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Bidders List</h1>

    <!-- Search Bar -->
    <input
      v-model="search"
      type="text"
      placeholder="Search Bidders..."
      class="p-2 border rounded w-full mb-4"
    />

    <!-- Bidders List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div
        v-for="bidder in filteredBidders"
        :key="bidder.id"
        class="border p-4 rounded shadow"
      >
        <h2 class="text-lg font-semibold">
          {{ bidder.first_name }} {{ bidder.last_name }}
        </h2>
        <p>Email: {{ bidder.email }}</p>
        <p>Address: {{ bidder.address }}</p>
      </div>
    </div>
  </div>
  </App>
</template>



