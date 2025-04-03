<script setup lang="ts">
import { ref, watch } from 'vue'
import { Link } from '@inertiajs/vue3'
import { Button } from '@/components/ui/button'
import {
  Copy, Ruler, Mountain, Wand, Gem, Type, BadgeCheck,
  Minus, Plus
} from 'lucide-vue-next'
import DefaultLayout from '@/layouts/DefaultLayout.vue'

defineOptions({
  layout: DefaultLayout
})

const product = {
  title: 'Картина «Ласточкино гнездо» (набор для вышивания)',
  article: 'Арт. 2345901',
  price: 1890,
  image: 'https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg',
  gallery: [
    'https://ir.ozone.ru/s3/multimedia-f/wc1000/6883877787.jpg',
    'https://ir.ozone.ru/s3/multimedia-r/wc1000/6883877835.jpg',
    'https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg'
  ],
  labels: ['Новинка'],
  description: `Прекрасный набор для вышивания бисером. В комплект входят все необходимые материалы: схема, бисер, игла и инструкция.`,
  characteristics: [
    { label: 'Размер', value: '40х50 см', icon: Ruler },
    { label: 'Сложность', value: 'Средняя', icon: Wand },
    { label: 'Тематика', value: 'Пейзажи и виды', icon: Mountain },
    { label: 'Тип вышивки', value: 'Бисером', icon: Type },
    { label: 'Форма страз', value: 'Круглая', icon: Gem },
    { label: 'Производитель', value: 'HobbyKot', icon: BadgeCheck },
  ],
}

const quantity = ref(1)
const total = ref(product.price)

watch(quantity, (val) => {
  if (val < 1) quantity.value = 1
  if (val > 10) quantity.value = 10
  total.value = quantity.value * product.price
})

const currentImage = ref(product.image)
const copyArticle = () => {
  navigator.clipboard.writeText(product.article)
}
</script>

<template>
  <main class="w-full pt-8 pb-16 font-montserrat text-[#443472]">
    <div class="max-w-7xl mx-auto px-4">

      <!-- Хлебные крошки -->
      <nav class="text-[13px] text-black/50 mb-4">
        <Link href="/" class="hover:underline text-black/70">Каталог</Link>
        <span class="mx-2">/</span>
        <span>Ласточкино гнездо</span>
      </nav>

      <!-- Название и артикул -->
      <h1 class="text-2xl font-semibold mb-1">{{ product.title }}</h1>
      <p class="text-sm text-[#6b7fa3] mb-4 flex items-center gap-2">
        {{ product.article }}
        <button @click="copyArticle" title="Скопировать">
          <Copy class="w-4 h-4 text-[#6b7fa3]" />
        </button>
      </p>

      <!-- Метки -->
      <div class="flex flex-wrap gap-2 mb-6">
        <span
          v-for="(label, i) in product.labels"
          :key="i"
          class="text-xs px-2 py-1 rounded-full bg-[#443472] text-white"
        >
          {{ label }}
        </span>
      </div>

      <div class="lg:flex gap-10 items-start">
        <!-- Левая колонка -->
        <div class="lg:w-1/2">
          <img :src="currentImage" alt="Товар" class="rounded-xl w-full object-cover mb-4" />
          <div class="flex gap-2 overflow-x-auto">
            <img
              v-for="(img, i) in product.gallery"
              :key="i"
              :src="img"
              @click="currentImage = img"
              class="w-16 h-16 rounded border cursor-pointer object-cover"
              :class="{ 'ring-2 ring-[#443472]': currentImage === img }"
            />
          </div>
        </div>

        <!-- Правая колонка -->
        <div class="flex-1 mt-8 lg:mt-0">
          <!-- Характеристики -->
          <div class="flex flex-col gap-5 text-sm mb-8">
            <div
              v-for="(item, index) in product.characteristics"
              :key="index"
              class="flex items-center"
            >
              <!-- Левая часть: иконка + название -->
              <div class="flex items-center gap-2 text-[#6b7fa3]">
                <component :is="item.icon" class="w-4 h-4 flex-shrink-0" />
                <span>{{ item.label }}</span>
              </div>

              <!-- Заполнитель с точками -->
              <div class="flex-1 border-b border-dotted border-black/20 mx-2 h-[1px] translate-y-[4px]" />

              <!-- Значение -->
              <div class="text-right text-[#443472] font-medium whitespace-nowrap">
                {{ item.value }}
              </div>
            </div>
          </div>

          <!-- Блок цены и кнопки -->
          <div class="bg-white rounded-xl border text-base px-6 py-5 flex flex-wrap gap-4 items-center mb-10">
            <div class="text-2xl font-bold min-w-[120px]">
              {{ total.toLocaleString('ru-RU') }} ₽
            </div>

            <div class="flex items-center gap-2">
              <button
                class="w-10 h-10 bg-[#443472] text-white rounded-md flex items-center justify-center"
                :disabled="quantity <= 1"
                @click="quantity--"
              >
                <Minus class="w-4 h-4" />
              </button>
              <input
                type="text"
                inputmode="numeric"
                pattern="[0-9]*"
                v-model.number="quantity"
                class="w-12 h-10 text-center border rounded-md outline-none ring-0 text-[#443472] font-semibold"
              />
              <button
                class="w-10 h-10 bg-[#443472] text-white rounded-md flex items-center justify-center"
                :disabled="quantity >= 10"
                @click="quantity++"
              >
                <Plus class="w-4 h-4" />
              </button>
            </div>

            <Button
              class="h-11 px-8 bg-[#443472] text-white rounded-xl hover:bg-[#36295b] ml-auto"
            >
              В корзину
            </Button>
          </div>

          <!-- Описание -->
          <div class="max-w-3xl">
            <h2 class="text-lg font-semibold mb-3">Описание</h2>
            <p class="text-sm text-[#443472] leading-relaxed">
              {{ product.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>
