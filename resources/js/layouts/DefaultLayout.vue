<template>
  <div class="flex flex-col min-h-screen font-montserrat">
    <Header />

    <!-- Контент страницы -->
    <main class="flex-1">
      <slot />
    </main>

    <!-- Прижатый к низу футер -->
    <Footer />
  </div>
</template>

<script setup lang="ts">
import Header from '@/front/Header.vue'
import Footer from '@/front/Footer.vue'
</script>
