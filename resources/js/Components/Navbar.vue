<template>
  <Navbar />
  <main class="container mx-auto p-4">
    <slot />
  </main>
</template>

<script setup>
import Navbar from "@/Components/Navbar.vue";
</script>
