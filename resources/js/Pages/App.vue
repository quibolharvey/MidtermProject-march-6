<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const isOpen = ref(false);
</script>

<template>
  <header class="bg-blue-600 shadow-md">
    <nav class="container mx-auto flex items-center justify-between p-4">
      <!-- Logo -->
      <div class="text-white text-xl font-bold">BENCH PRESS</div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-6">
        <Link href="/" class="nav-link">Home</Link>
        <Link href="/bidders" class="nav-link">Bidders</Link>
        <Link href="/cars" class="nav-link">Cars</Link>
      </div>

      <!-- Mobile Menu Button -->
      <button
        class="md:hidden text-white focus:outline-none"
        @click="isOpen = !isOpen"
      >
        <svg
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16m-7 6h7"
          ></path>
        </svg>
      </button>
    </nav>

    <!-- Mobile Menu -->
    <div
      v-if="isOpen"
      class="md:hidden bg-blue-700 text-white flex flex-col space-y-2 p-4"
    >
      <Link href="/" class="mobile-link">Home</Link>
      <Link href="/bidders" class="mobile-link">Bidders</Link>
      <Link href="/cars" class="mobile-link">Cars</Link>
    </div>
  </header>
  <slot />
</template>

<style scoped>
.nav-link {
  @apply text-yellow-200 hover:text-white transition-all font-medium;
}

.mobile-link {
  @apply py-2 border-b border-blue-500 text-yellow-200 hover:text-white transition-all;
}
</style>
