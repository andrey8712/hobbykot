<script setup lang="ts">
import { Button } from '@/components/ui/button'
import { SlidersHorizontal, ArrowDownUp, ArrowUp, ArrowDown, Plus, Minus } from 'lucide-vue-next'
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger
} from '@/components/ui/dropdown-menu'
import Header from '@/front/Header.vue'
import Footer from '@/front/Footer.vue'
import Filters from '@/front/Filters.vue'
import { Link } from '@inertiajs/vue3'
import { ref, onMounted, watch } from 'vue'
import DefaultLayout from '@/layouts/DefaultLayout.vue'

defineOptions({
  layout: DefaultLayout
})

const cartVisibility = ref<Record<number, boolean>>({})
const toggleCart = (id: number) => {
  cartVisibility.value[id] = true
  if (!quantities.value[id]) quantities.value[id] = 1
}

onMounted(() => {
  cartVisibility.value[4] = true
  quantities.value[4] = 1
})

const formatPrice = (value: number) => {
  return value.toLocaleString('ru-RU') + ' ₽'
}

const gallery = [
  'https://ir.ozone.ru/s3/multimedia-f/wc1000/6883877787.jpg',
  'https://ir.ozone.ru/s3/multimedia-r/wc1000/6883877835.jpg',
  'https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg'
]

const currentImage = ref<Record<number, string>>({})

const setImage = (index: number, src: string) => {
  currentImage.value[index] = src
}

const quantities = ref<Record<number, number>>({})

const decrement = (i: number) => {
  if (!quantities.value[i]) quantities.value[i] = 1
  if (quantities.value[i] > 0) quantities.value[i]--
}

const increment = (i: number) => {
  if (!quantities.value[i]) quantities.value[i] = 0
  if (quantities.value[i] < 10) quantities.value[i]++
}

watch(quantities, (newVal) => {
  for (const key in newVal) {
    if (newVal[key] > 10) newVal[key] = 10
    if (newVal[key] < 0 || isNaN(newVal[key])) newVal[key] = 0
  }
}, { deep: true })

function restrictToDigits(e: KeyboardEvent) {
  const allowedKeys = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'Tab']
  if (!/\d/.test(e.key) && !allowedKeys.includes(e.key)) {
    e.preventDefault()
  }
}
</script>

<template>
    <main class="w-full pt-8 pb-16">
        <div class="max-w-7xl mx-auto px-4">

        <!-- Хлебные крошки -->
        <nav class="text-[13px] text-black/50 mb-4">
            <Link href="/" class="hover:underline text-black/70">Каталог</Link>
            <span class="mx-2">/</span>
            <span>Все товары</span>
        </nav>

        <div class="lg:flex lg:space-x-8">
            <!-- Фильтры -->
            <Filters />

            <!-- Контент -->
            <section class="flex-1">

            <!-- Сортировка -->
            <div class="mb-6 flex flex-col md:flex-row md:justify-between md:items-center gap-3 text-sm text-black/60">
                <p>
                Показано <span class="text-black font-medium">1–16</span> из <span class="text-black font-medium">66</span> товаров
                </p>
                <div class="flex items-center gap-3">
                <span class="hidden md:inline">Сортировка:</span>
                <DropdownMenu>
                    <DropdownMenuTrigger class="flex items-center gap-2 text-black hover:text-black/80 transition-colors">
                    <ArrowDownUp class="w-4 h-4" />
                    По умолчанию
                    </DropdownMenuTrigger>
                    <DropdownMenuContent>
                    <DropdownMenuItem>
                        <ArrowUp class="w-4 h-4 mr-2" />
                        <span>Цена: по возрастанию</span>
                    </DropdownMenuItem>
                    <DropdownMenuItem>
                        <ArrowDown class="w-4 h-4 mr-2" />
                        <span>Цена: по убыванию</span>
                    </DropdownMenuItem>
                    </DropdownMenuContent>
                </DropdownMenu>
                </div>
            </div>

            <!-- Карточки товаров -->
            <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                <div
                v-for="i in 6"
                :key="i"
                class="group relative border p-4 rounded-md bg-white shadow-sm transition-transform duration-200 hover:-translate-y-1"
                >
                <!-- Изображение товара -->
                <div class="relative">
                  <!-- Скидка -->
                  <template v-if="i === 2">
                    <div class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded-md shadow">
                      -{{ Math.round((1 - 11905 / 14500) * 100) }}%
                    </div>
                  </template>

                  <!-- Артикул -->
                  <div class="absolute top-2 right-2 bg-white/80 text-black/60 text-[11px] px-2 py-0.5 rounded">
                    Арт. 2345901
                  </div>

                  <img
                    :src="currentImage[i] || gallery[0]"
                    alt="Товар"
                    class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75"
                  />
                </div>


                <!-- Миниатюры -->
                <div class="flex gap-2 mt-2">
                    <img
                    v-for="(img, j) in gallery"
                    :key="j"
                    :src="img"
                    @mouseenter="setImage(i, img)"
                    class="w-10 h-10 rounded border cursor-pointer object-cover"
                    />
                </div>

                <!-- Название -->
                <div class="mt-4">
                    <h3 class="text-sm text-[#443472] line-clamp-2 h-[3em]">
                    <a href="#" class="hover:underline block">
                        Ласточкино гнездо в Крыму на подрамнике (картина стразами)
                    </a>
                    </h3>
                </div>

                <!-- Цена -->
                <div class="mt-2 text-xl font-semibold text-[#6b7fa3]">
                    <template v-if="i === 2">
                    <div class="flex items-center gap-2">
                        <span class="line-through text-gray-400 text-sm">{{ formatPrice(14500) }}</span>
                        <span class="text-red-600 font-bold">{{ formatPrice(11905) }}</span>
                    </div>
                    </template>
                    <template v-else>
                    {{ formatPrice(11905) }}
                    </template>
                </div>

                <!-- Кнопка или счётчик -->
                <div class="mt-4 transition-all duration-300">
                    <div v-if="cartVisibility[i]">
                    <div class="w-full rounded-xl h-11 bg-[#443472] text-white text-base flex items-center">
                        <button
                        class="w-[30%] h-full flex items-center justify-center rounded-l-xl bg-white/10 disabled:opacity-30"
                        :disabled="quantities[i] === 0"
                        @click="decrement(i)"
                        >
                        <Minus class="w-4 h-4 text-white" />
                        </button>
                        <input
                        class="w-[40%] text-center bg-transparent border-none outline-none ring-0 text-white text-base font-medium"
                        v-model.number="quantities[i]"
                        :min="0"
                        :max="10"
                        inputmode="numeric"
                        pattern="[0-9]*"
                        @keydown="restrictToDigits"
                        />
                        <button
                        class="w-[30%] h-full flex items-center justify-center rounded-r-xl bg-white/10 disabled:opacity-30"
                        :disabled="quantities[i] >= 10"
                        @click="increment(i)"
                        >
                        <Plus class="w-4 h-4 text-white" />
                        </button>
                    </div>
                    </div>
                    <div v-else>
                    <Button
                        class="h-11 px-6 w-full bg-[#443472] text-white hover:bg-[#36295b] rounded-xl text-base"
                        @click="() => { toggleCart(i); quantities[i] = 1 }"
                    >
                        Купить
                    </Button>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
        </div>
    </main>
</template>
  
<style scoped>
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
