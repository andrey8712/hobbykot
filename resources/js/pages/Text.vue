<script setup lang="ts">
import DefaultLayout from '@/layouts/DefaultLayout.vue'
import { Phone, Send, CreditCard, Truck, MapPin, Wallet, Banknote, Store } from 'lucide-vue-next'
import { Link } from '@inertiajs/vue3'

defineOptions({
  layout: DefaultLayout
})
</script>

<template>
  <main class="w-full pt-8 pb-20 font-montserrat text-[#443472]">
    <div class="max-w-7xl mx-auto px-4 space-y-10">
      
      <!-- Хлебные крошки -->
      <nav class="text-[13px] text-black/50">
        <Link href="/" class="hover:underline text-black/70">Главная</Link>
        <span class="mx-2">/</span>
        <span>Доставка и оплата</span>
      </nav>

      <!-- Заголовок -->
      <h1 class="text-3xl font-bold text-[#443472]">
        Информация по доставке и оплате
      </h1>

      <!-- Вводный текст -->
      <p class="text-base text-[#443472] leading-relaxed max-w-3xl">
        Мы стремимся сделать процесс покупки максимально удобным для вас. Вы можете выбрать подходящие варианты оплаты и доставки при оформлении заказа, и мы уточним все детали.
      </p>

      <!-- Оплата -->
      <section class="space-y-4">
        <h2 class="text-xl font-semibold">Оплата</h2>
        <ul class="space-y-2 text-base text-[#443472]">
          <li class="flex items-center gap-2">
            <Wallet class="w-4 h-4 text-[#6b7fa3]" />
            Наличные
          </li>
          <li class="flex items-center gap-2">
            <Banknote class="w-4 h-4 text-[#6b7fa3]" />
            Перевод на расчетный счёт
          </li>
          <li class="flex items-center gap-2">
            <CreditCard class="w-4 h-4 text-[#6b7fa3]" />
            Перевод на карту
          </li>
        </ul>
        <p class="mt-2 text-sm text-[#6b7fa3]">
          Обратите внимание, что заказ отгружается только по 100 % предоплате.
        </p>
      </section>

      <!-- Доставка -->
      <section class="space-y-6">
        <h2 class="text-xl font-semibold">Доставка</h2>

        <div class="space-y-2">
          <h3 class="text-base font-medium flex items-center gap-2">
            <Store class="w-4 h-4 text-[#6b7fa3]" />
            Самовывоз
          </h3>
          <p class="text-base text-[#443472]">
            Бесплатно с нашего склада. Вы можете забрать свой заказ в удобное для вас время. <br />
            <strong>Адрес:</strong> г. Москва, ул. Примерная, д. 5, стр. 2
          </p>
        </div>

        <div class="space-y-2">
          <h3 class="text-base font-medium flex items-center gap-2">
            <MapPin class="w-4 h-4 text-[#6b7fa3]" />
            Службы доставки
          </h3>
          <ul class="list-disc list-inside text-base text-[#443472] space-y-1 ml-1">
            <li>СДЭК</li>
            <li>ПЭК</li>
            <li>Байкал-Сервис</li>
            <li>Яндекс Доставка</li>
          </ul>
        </div>
      </section>

      <!-- Контакты -->
      <section class="border-t pt-8 mt-10 space-y-4">
        <p class="text-base text-[#443472]">
          Если у вас возникли вопросы или требуется дополнительная информация — не стесняйтесь обращаться к нам!
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="tel:+78001234567" class="flex items-center gap-2 text-white bg-[#443472] hover:bg-[#36295b] px-5 py-3 rounded-lg text-sm">
            <Phone class="w-4 h-4" /> Позвонить
          </a>
          <a href="https://t.me/hobbykot" target="_blank" class="flex items-center gap-2 text-white bg-[#443472] hover:bg-[#36295b] px-5 py-3 rounded-lg text-sm">
            <Send class="w-4 h-4" /> Написать в Telegram
          </a>
        </div>
      </section>
    </div>
  </main>
</template>
