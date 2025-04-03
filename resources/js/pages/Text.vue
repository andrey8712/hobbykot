<script setup lang="ts">
import DefaultLayout from '@/layouts/DefaultLayout.vue'
import { FileText, Phone, Send, Wallet, Banknote, CreditCard, Store, Truck } from 'lucide-vue-next'

defineOptions({ layout: DefaultLayout })

const mainPages = [
  { name: 'Доставка и оплата', href: '#', active: true },
  { name: 'О нас', href: '#' },
  { name: 'Контакты', href: '#' }
]

const servicePages = [
  { name: 'Политика обработки персональных данных', href: '#' }
]
</script>

<template>
  <main class="w-full pt-8 pb-20 font-montserrat text-[#443472]">
    <div class="max-w-7xl mx-auto px-4">
      
      <!-- Хлебные крошки -->
      <nav class="text-[13px] text-black/50 mb-6">
        <a href="/" class="hover:underline text-black/70">Главная</a>
        <span class="mx-2">/</span>
        <span>Доставка и оплата</span>
      </nav>

      <!-- Контент + aside -->
      <div class="flex flex-col lg:flex-row gap-10">
        
        <!-- Sidebar -->
        <aside class="w-full lg:w-64 border border-gray-200 rounded-xl p-4 space-y-4 text-sm">
          <!-- Основные -->
          <nav class="space-y-1">
            <template v-for="(item, i) in mainPages" :key="i">
              <a
                :href="item.href"
                class="flex items-start gap-3 px-3 py-2 rounded-lg transition-colors leading-snug"
                :class="item.active
                  ? 'bg-[#443472] text-white'
                  : 'hover:bg-gray-100 text-[#443472]'"
              >
                <FileText
                  class="w-4 h-4 mt-[2px] flex-shrink-0"
                  :class="item.active ? 'text-white' : 'text-[#6b7fa3]'"
                />
                <span>{{ item.name }}</span>
              </a>
            </template>
          </nav>

          <div class="border-t border-gray-200 my-2" />

          <!-- Служебные -->
          <nav class="space-y-1">
            <template v-for="(item, i) in servicePages" :key="i">
              <a
                :href="item.href"
                class="flex items-start gap-3 px-3 py-2 rounded-lg transition-colors leading-snug hover:bg-gray-100 text-[#443472]"
              >
                <FileText class="w-4 h-4 mt-[2px] flex-shrink-0 text-[#6b7fa3]" />
                <span>{{ item.name }}</span>
              </a>
            </template>
          </nav>
        </aside>

        <!-- Основной контент -->
        <div class="flex-1 space-y-10">
          <h1 class="text-2xl font-semibold">Информация по доставке и оплате</h1>

          <p class="text-base leading-relaxed max-w-3xl">
            Мы стремимся сделать процесс покупки максимально удобным для вас. Вы можете выбрать подходящие варианты оплаты и доставки при оформлении заказа, и мы уточним все детали.
          </p>

          <!-- Оплата -->
          <section class="space-y-4">
            <h2 class="text-lg font-semibold">Оплата</h2>
            <ul class="space-y-3 text-base">
              <li class="flex items-center gap-2">
                <Wallet class="w-5 h-5 text-[#6b7fa3]" />
                Наличные
              </li>
              <li class="flex items-center gap-2">
                <Banknote class="w-5 h-5 text-[#6b7fa3]" />
                Перевод на расчётный счёт
              </li>
              <li class="flex items-center gap-2">
                <CreditCard class="w-5 h-5 text-[#6b7fa3]" />
                Перевод на карту
              </li>
            </ul>
            <p class="text-sm text-[#6b7fa3]">
              Обратите внимание, что заказ отгружается только по 100% предоплате.
            </p>
          </section>

          <!-- Доставка -->
          <section class="space-y-6">
            <h2 class="text-lg font-semibold">Доставка</h2>

            <div class="space-y-2">
              <h3 class="text-base font-medium flex items-center gap-2">
                <Store class="w-5 h-5 text-[#6b7fa3]" />
                Самовывоз
              </h3>
              <p class="text-base">
                Бесплатно с нашего склада. Вы можете забрать свой заказ в удобное для вас время. <br />
                <strong>Адрес:</strong> г. Москва, ул. Примерная, д. 5, стр. 2
              </p>
            </div>

            <div class="space-y-3">
              <h3 class="text-base font-medium flex items-center gap-2">
                <Truck class="w-5 h-5 text-[#6b7fa3]" />
                Службы доставки
              </h3>
              <ul class="list-disc list-inside space-y-1 text-base ml-1">
                <li>СДЭК</li>
                <li>ПЭК</li>
                <li>Байкал-Сервис</li>
                <li>Яндекс Доставка</li>
              </ul>
            </div>
          </section>

          <!-- Контакты -->
          <section class="border-t pt-8 mt-10 space-y-6">
            <p class="text-base leading-relaxed max-w-[90%] md:max-w-2xl">
              Если у вас возникли вопросы или требуется дополнительная информация — не стесняйтесь обращаться к нам!
            </p>
            <div class="flex flex-wrap gap-4">
              <a
                href="tel:+78001234567"
                class="flex items-center gap-2 text-white bg-[#443472] hover:bg-[#36295b] px-5 py-3 rounded-lg text-sm"
              >
                <Phone class="w-4 h-4" /> Позвонить
              </a>
              <a
                href="https://t.me/hobbykot"
                target="_blank"
                class="flex items-center gap-2 text-white bg-[#443472] hover:bg-[#36295b] px-5 py-3 rounded-lg text-sm"
              >
                <Send class="w-4 h-4" /> Написать в Telegram
              </a>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
</template>
