<script setup lang="ts">
import { ref } from 'vue'
import BurgerButton from './BurgerButton.vue'
import {
  Diamond, Paintbrush2, Puzzle, Star, Gift, Brush, Heart, Palette, PenLine, SunMoon, BadgeCheck
} from 'lucide-vue-next'

const isOpen = ref(false)

const categories = [
  {
    title: 'Алмазная вышивка',
    icon: Diamond,
    items: [
      { name: 'Наборы', icon: Star, note: 'от 50 ₽' },
      { name: 'Картины', icon: Brush },
      { name: 'Аксессуары', icon: Gift }
    ]
  },
  {
    title: 'Рисование',
    icon: Paintbrush2,
    items: [
      { name: 'Картины по номерам', icon: PenLine, note: 'Хиты продаж' },
      { name: 'Фломастеры', icon: Brush },
      { name: 'Краски', icon: Palette }
    ]
  },
  {
    title: 'Детское творчество',
    icon: Puzzle,
    items: [
      { name: 'Песочная анимация', icon: Heart, note: 'Большой выбор' },
      { name: 'Мозаика', icon: Gift },
      { name: 'Наклейки', icon: Star }
    ]
  },
  {
    title: 'Вышивка',
    icon: BadgeCheck,
    items: [
      { name: 'Крестиком', icon: Star },
      { name: 'Бисером', icon: Gift },
      { name: 'Гладью', icon: Brush }
    ]
  },
  {
    title: 'Для взрослых',
    icon: SunMoon,
    items: [
      { name: 'Гравюры', icon: PenLine },
      { name: 'Скрапбукинг', icon: Gift },
      { name: 'Декор', icon: Brush }
    ]
  }
]
</script>

<template>
  <div class="relative z-50">
    <!-- Кнопка -->
    <button
      @click="isOpen = !isOpen"
      class="flex items-center gap-3 text-white font-semibold transition hover:text-white/80"
    >
      <BurgerButton :open="isOpen" />
      <span>Каталог</span>
    </button>

    <!-- Фон и меню -->
    <Transition name="fade">
      <div
        v-if="isOpen"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40"
        @click="isOpen = false"
      />
    </Transition>

    <Transition name="slide-fade">
      <div
        v-if="isOpen"
        class="absolute lg:left-0 lg:top-full lg:mt-4 w-full lg:w-[1000px] bg-white rounded-xl border border-gray-200 shadow-xl px-8 py-6 z-50"
      >
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-10">
          <div v-for="(category, index) in categories" :key="index">
            <h4 class="text-[#443472] text-base font-bold flex items-center gap-2 mb-4">
              <component :is="category.icon" class="w-5 h-5 text-[#443472]" />
              {{ category.title }}
            </h4>
            <ul class="space-y-4 text-sm text-gray-800 font-normal">
              <li v-for="(item, i) in category.items" :key="i">
                <a href="#" class="flex flex-col group">
                  <div class="flex items-center gap-2 group-hover:text-[#6b7fa3]">
                    <component :is="item.icon" class="w-4 h-4 flex-shrink-0" />
                    <span>{{ item.name }}</span>
                  </div>
                  <span v-if="item.note" class="text-xs text-[#6b7fa3] pl-6">{{ item.note }}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </Transition>
  </div>
</template>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
.slide-fade-enter-active {
  transition: all 0.3s ease;
}
.slide-fade-enter-from {
  opacity: 0;
  transform: translateY(10px);
}
.slide-fade-leave-to {
  opacity: 0;
  transform: translateY(10px);
}
</style>
