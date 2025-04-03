<script setup lang="ts">
import { ref, computed } from 'vue'
import { Minus, Plus, Trash } from 'lucide-vue-next'
import { Button } from '@/components/ui/button'
import DefaultLayout from '@/layouts/DefaultLayout.vue'

defineOptions({ layout: DefaultLayout })

const minSum = 2300

const cart = ref([
  {
    id: 1,
    title: 'Картина «Ласточкино гнездо» Картина «Ласточкино гнездо» Картина «Ласточкино гнездо»',
    article: 'Арт. 2345901',
    price: 1890,
    quantity: 1,
    image: 'https://ir.ozone.ru/s3/multimedia-1-b/wc1000/7295128319.jpg',
  },
  {
    id: 2,
    title: 'Набор для вышивки бисером',
    article: 'Арт. 3456821',
    price: 1190,
    quantity: 1,
    image: 'https://ir.ozone.ru/s3/multimedia-f/wc1000/6883877787.jpg',
  }
])

const selectedPayment = ref('')
const selectedDelivery = ref('')
const address = ref('')

const total = computed(() =>
  cart.value.reduce((sum, item) => sum + item.price * item.quantity, 0)
)

const canSubmit = computed(() =>
  total.value >= minSum && selectedPayment.value && selectedDelivery.value
)

const increase = (item: typeof cart.value[number]) => {
  if (item.quantity < 10) item.quantity++
}

const decrease = (item: typeof cart.value[number]) => {
  if (item.quantity > 1) item.quantity--
}

const remove = (item: typeof cart.value[number]) => {
  cart.value = cart.value.filter(i => i.id !== item.id)
}

const formatPrice = (value: number) =>
  value.toLocaleString('ru-RU') + ' ₽'

const paymentOptions = ['Онлайн картой', 'При получении']
const deliveryOptions = ['Курьером по Москве', 'В пункт выдачи', 'Почтой России']
</script>

<template>
  <main class="w-full pt-8 pb-16 font-montserrat text-[#443472]">
    <div class="max-w-7xl mx-auto px-4">
      <div
        v-if="total < minSum"
        class="mb-6 p-4 bg-yellow-100 border border-yellow-300 text-sm text-yellow-800 rounded"
      >
        Минимальная сумма заказа — {{ formatPrice(minSum) }}. Пожалуйста, добавьте товары в корзину.
      </div>

      <div class="lg:flex gap-10">
        <!-- Товары -->
        <div class="flex-1 space-y-6">
          <div
            v-for="item in cart"
            :key="item.id"
            class="flex gap-5 items-start border rounded-xl p-5 bg-white shadow-sm"
          >
            <img :src="item.image" class="w-28 h-28 rounded object-cover flex-shrink-0" />

            <div class="flex-1 space-y-3">
              <div class="flex flex-wrap justify-between items-center gap-4">
                <h3 class="text-base font-semibold text-[#443472] leading-snug line-clamp-2 max-w-[300px]">
                  {{ item.title }}
                </h3>

                <div class="flex items-center gap-4 flex-wrap">
                  <div class="flex items-center gap-1 bg-[#f3f4f6] px-2 py-[6px] rounded-md">
                    <button
                      class="w-8 h-8 bg-[#443472] text-white rounded flex items-center justify-center disabled:opacity-30"
                      :disabled="item.quantity <= 1"
                      @click="decrease(item)"
                    >
                      <Minus class="w-4 h-4" />
                    </button>
                    <input
                      v-model.number="item.quantity"
                      inputmode="numeric"
                      pattern="[0-9]*"
                      class="w-10 text-center text-base outline-none bg-transparent font-semibold text-[#443472]"
                    />
                    <button
                      class="w-8 h-8 bg-[#443472] text-white rounded flex items-center justify-center disabled:opacity-30"
                      :disabled="item.quantity >= 10"
                      @click="increase(item)"
                    >
                      <Plus class="w-4 h-4" />
                    </button>
                  </div>

                  <div class="text-lg font-bold text-[#443472] min-w-[90px]">
                    {{ formatPrice(item.price * item.quantity) }}
                  </div>

                  <button
                    @click="remove(item)"
                    class="text-gray-400 hover:text-black transition"
                    title="Удалить товар"
                  >
                    <Trash class="w-5 h-5" />
                  </button>
                </div>
              </div>

              <p class="text-sm text-[#6b7fa3]">{{ item.article }}</p>
            </div>
          </div>
        </div>

        <!-- Оформление -->
        <div class="w-full lg:w-[360px] mt-10 lg:mt-0 sticky top-8 self-start">
          <div class="border border-[#e5e7eb] rounded-xl p-6 bg-[#fafbfc] space-y-6 shadow-sm">
            <!-- Оплата -->
            <div>
              <h4 class="font-semibold mb-2 text-sm">Оплата</h4>
              <div
                v-for="method in paymentOptions"
                :key="method"
                class="flex items-center gap-2 mb-2"
              >
                <input
                  type="radio"
                  :id="'pay-' + method"
                  :value="method"
                  v-model="selectedPayment"
                  class="accent-[#443472]"
                />
                <label :for="'pay-' + method" class="text-sm">{{ method }}</label>
              </div>
            </div>

            <!-- Доставка -->
            <div>
              <h4 class="font-semibold mb-2 text-sm">Доставка</h4>
              <div
                v-for="method in deliveryOptions"
                :key="method"
                class="flex items-center gap-2 mb-2"
              >
                <input
                  type="radio"
                  :id="'delivery-' + method"
                  :value="method"
                  v-model="selectedDelivery"
                  class="accent-[#443472]"
                />
                <label :for="'delivery-' + method" class="text-sm">{{ method }}</label>
              </div>
            </div>

            <!-- Адрес -->
            <div>
              <h4 class="font-semibold mb-2 text-sm">Адрес доставки</h4>
              <div class="border border-gray-300 rounded px-3 py-2 bg-white">
                <textarea
                  rows="3"
                  v-model="address"
                  placeholder="Введите адрес"
                  class="w-full text-sm outline-none resize-none placeholder:text-gray-400 text-[#443472] leading-relaxed bg-transparent"
                />
              </div>
            </div>

            <!-- Итог -->
            <div class="border-t pt-4 text-base">
              <div class="flex justify-between mb-4 text-lg font-semibold">
                <span>Итого</span>
                <span>{{ formatPrice(total) }}</span>
              </div>
              <Button
                class="w-full h-12 bg-[#443472] text-white text-lg rounded-xl hover:bg-[#36295b]"
                :disabled="!canSubmit"
              >
                Оформить заказ
              </Button>
            </div>
          </div>
        </div>

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
}
</style>
