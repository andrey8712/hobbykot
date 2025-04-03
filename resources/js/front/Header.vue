<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { Truck, Clock, Package, ShoppingCart, Heart } from 'lucide-vue-next'
import CatalogDropdown from './components/CatalogDropdown.vue'
</script>

<template>
  <header class="bg-[#fafbfc] shadow-sm font-montserrat">
    <!-- Десктоп -->
    <div class="hidden lg:block h-[92px]">
      <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between">

        <!-- Логотип -->
        <Link :href="route('home')" class="flex items-center gap-3">
          <img
            src="/img/22aaf6fa-d6b2-44a9-80ac-2233a7bc945e.jpg"
            class="h-16"
            alt="hobbykot logo"
          />
          <span class="text-2xl font-semibold text-[#443472]">hobbykot.ru</span>
        </Link>

        <!-- Информация о доставке -->
        <div class="flex items-center flex-wrap gap-x-5 text-sm text-[#6b7fa3] leading-snug max-w-xl">
          <div class="flex items-center gap-2">
            <Truck class="w-4 h-4 text-[#443472]" />
            Доставка по Москве — от <span class="text-green-600 font-semibold">2 300 ₽</span>
          </div>
          <div class="flex items-center gap-2">
            <Clock class="w-4 h-4 text-[#443472]" />
            от <strong>1 дня</strong>
          </div>
          <div class="flex items-center gap-2">
            <Package class="w-4 h-4 text-[#443472]" />
            <strong>1 805 ПВЗ</strong> — от <span>70 ₽</span>
          </div>
        </div>

        <!-- Контакты + иконки -->
        <div class="flex items-center gap-6">
          <a href="tel:88001234567" class="text-base text-[#443472] hover:underline font-medium">
            8 800 123 45 67
          </a>

          <a href="https://t.me/" target="_blank">
            <img src="/img/telegram.svg" alt="Telegram" class="w-6 h-6" />
          </a>

          <a href="#" class="flex items-center gap-1 text-[#443472] hover:text-[#6b7fa3]">
            <ShoppingCart class="w-6 h-6" />
            <span>0</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Мобилка -->
    <div class="lg:hidden h-[60px] flex items-center justify-between px-5 bg-white shadow">
      <button class="text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <a href="/">
        <img src="/img/22aaf6fa-d6b2-44a9-80ac-2233a7bc945e.jpg" class="h-12" alt="Logo" />
      </a>
      <a href="#" class="text-[#443472]">
        <ShoppingCart class="w-6 h-6" />
      </a>
    </div>

    <!-- Меню навигации -->
    <nav class="hidden lg:block bg-[#443472]">
      <div class="max-w-7xl mx-auto px-6 py-3">
        <ul class="flex gap-10 text-sm text-white font-medium items-center">
          <li>
            <CatalogDropdown />
          </li>
          <li>
            <a
              href="#"
              class="flex items-center min-h-[40px] hover:text-white/80 transition-colors"
            >
              Оплата и доставка
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center min-h-[40px] hover:text-white/80 transition-colors"
            >
              О нас
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center min-h-[40px] hover:text-white/80 transition-colors"
            >
              Контакты
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</template>
