<script setup lang="ts">
import { ref } from 'vue'

const filters = ref({
  priceFrom: '',
  priceTo: '',
  searchManufacturer: '',
  selectedManufacturer: [] as string[],
})

const manufacturers = [
  'HobbyKot', 'Алмазная живопись', 'Золотое Руно', 'М-Пластика', 'Риолис',
  'Алиса', 'Леонардо', 'Белоснежка', 'Сделай сам', 'Арт-Шик'
]

const isChecked = (value: string) => filters.value.selectedManufacturer.includes(value)
const toggleManufacturer = (value: string) => {
  const list = filters.value.selectedManufacturer
  if (list.includes(value)) {
    filters.value.selectedManufacturer = list.filter(v => v !== value)
  } else {
    filters.value.selectedManufacturer.push(value)
  }
}
</script>

<template>
  <aside class="lg:w-[270px] sticky top-0 z-10 overflow-y-auto bg-[#fafbfc] rounded-xl shadow-sm px-6 py-6 hidden lg:block font-montserrat text-[#443472] text-sm">
    
    <!-- Цена -->
    <div class="mb-8">
      <h3 class="text-base font-semibold mb-4">Цена, ₽</h3>
      <div class="flex gap-2 items-center">
        <input
          type="number"
          v-model="filters.priceFrom"
          class="w-full border rounded-md px-3 py-1.5 text-sm"
          placeholder="от"
        />
        <input
          type="number"
          v-model="filters.priceTo"
          class="w-full border rounded-md px-3 py-1.5 text-sm"
          placeholder="до"
        />
      </div>
    </div>

    <!-- Размер -->
    <div class="mb-8">
      <h3 class="text-base font-semibold mb-4">Размер</h3>
      <div class="flex flex-col gap-2">
        <label><input type="checkbox" class="accent-[#443472] mr-2" />40×50 см</label>
        <label><input type="checkbox" class="accent-[#443472] mr-2" />50×60 см</label>
        <label><input type="checkbox" class="accent-[#443472] mr-2" />60×80 см</label>
      </div>
    </div>

    <!-- Тематика -->
    <div class="mb-8">
      <h3 class="text-base font-semibold mb-4">Тематика</h3>
      <div class="flex flex-col gap-2">
        <label><input type="checkbox" class="accent-[#443472] mr-2" />Пейзажи</label>
        <label><input type="checkbox" class="accent-[#443472] mr-2" />Город</label>
        <label><input type="checkbox" class="accent-[#443472] mr-2" />Животные</label>
        <label><input type="checkbox" class="accent-[#443472] mr-2" />Цветы</label>
      </div>
    </div>

    <!-- Тип вышивки -->
    <div class="mb-8">
      <h3 class="text-base font-semibold mb-4">Тип вышивки</h3>
      <label class="block mb-2">
        <input type="radio" name="embroidery" class="accent-[#443472] mr-2" />
        Бисером
      </label>
      <label class="block">
        <input type="radio" name="embroidery" class="accent-[#443472] mr-2" />
        Крестиком
      </label>
    </div>

    <!-- Новинка и хиты -->
    <div class="mb-8">
      <h3 class="text-base font-semibold mb-4">Дополнительно</h3>
      <label class="block mb-2">
        <input type="checkbox" class="accent-[#443472] mr-2" />
        Новинка
      </label>
      <label class="block">
        <input type="checkbox" class="accent-[#443472] mr-2" />
        Хит продаж
      </label>
    </div>

    <!-- Производители -->
    <div class="mb-8">
      <h3 class="text-base font-semibold mb-4">Производитель</h3>
      <input
        type="text"
        v-model="filters.searchManufacturer"
        placeholder="Поиск..."
        class="w-full mb-3 border rounded-md px-3 py-1.5 text-sm"
      />

      <div class="max-h-[160px] overflow-y-auto pr-1 space-y-2">
        <label
          v-for="(name, index) in manufacturers.filter(m => m.toLowerCase().includes(filters.searchManufacturer.toLowerCase()))"
          :key="index"
          class="block"
        >
          <input
            type="checkbox"
            :checked="isChecked(name)"
            @change="toggleManufacturer(name)"
            class="accent-[#443472] mr-2"
          />
          {{ name }}
        </label>
      </div>
    </div>
  </aside>
</template>
