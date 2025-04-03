<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <footer class="bg-[#fafbfc] text-sm text-gray-700 py-12 shadow-inner">
    <div class="max-w-7xl mx-auto px-4 space-y-12">
      
      <!-- Верхняя часть футера -->
      <div class="flex flex-col lg:flex-row justify-between gap-10">
        
        <!-- Навигация -->
        <nav class="flex flex-col gap-2 min-w-[180px]">
          <a href="#" class="text-[#443472] hover:text-[#6b7fa3] transition font-medium">Каталог</a>
          <a href="#" class="text-[#443472] hover:text-[#6b7fa3] transition font-medium">Оплата и доставка</a>
          <a href="#" class="text-[#443472] hover:text-[#6b7fa3] transition font-medium">О нас</a>
          <a href="#" class="text-[#443472] hover:text-[#6b7fa3] transition font-medium">Контактная информация</a>
        </nav>

        <!-- Логотип -->
        <div class="flex flex-col items-start gap-3">
          <Link :href="route('home')">
            <img src="/img/22aaf6fa-d6b2-44a9-80ac-2233a7bc945e.jpg" alt="Логотип" class="h-20 w-auto" />
          </Link>
        </div>

        <!-- Контакты -->
        <div class="text-gray-700 space-y-1 text-sm">
          <p class="font-medium">
            Звоните: 
            <a href="tel:+78001234567" class="text-[#443472] hover:underline">
              8 800 123 45 67
            </a>
          </p>
          <p class="text-[#6b7fa3]">Пн–Пт с 9:00 до 18:00</p>
        </div>

      </div>

      <!-- Нижняя часть футера -->
      <div class="flex flex-col lg:flex-row items-start gap-2 lg:gap-6 text-xs text-[#999]">
        <p class="">&copy; 2025 Все права защищены.</p>
        <div class="flex flex-wrap gap-4">
          <a href="/sitemap" class="hover:text-[#6b7fa3] transition">Карта сайта</a>
          <a href="/privacy" class="hover:text-[#6b7fa3] transition">Политика обработки персональных данных</a>
        </div>
      </div>
    </div>
  </footer>
</template>
