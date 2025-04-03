<script setup lang="ts">
import { ref } from 'vue'

const filters = ref([
  {
    title: 'Размер',
    type: 'checkbox',
    open: true,
    options: ['40х50 см', '50х60 см', '60х80 см']
  },
  {
    title: 'Сложность',
    type: 'radio',
    open: true,
    options: ['Легкая', 'Средняя', 'Сложная'],
    selected: ''
  },
  {
    title: 'Тематика',
    type: 'checkbox',
    open: true,
    options: ['Пейзажи', 'Город', 'Животные', 'Цветы']
  },
  {
    title: 'Тип вышивки',
    type: 'checkbox',
    open: true,
    options: ['Бисером', 'Крестиком']
  },
  {
    title: 'Форма страз',
    type: 'radio',
    open: true,
    options: ['Круглая', 'Квадратная'],
    selected: ''
  },
  {
    title: 'Производитель',
    type: 'search',
    open: true,
    search: '',
    options: [
      'HobbyKot', 'Алмазная живопись', 'Золотое Руно', 'МП Студия', 'Жар-птица', 'Риолис', 'Luca-S'
    ]
  }
])

const price = ref({ min: 500, max: 5000 })

const toggleSection = (index: number) => {
  filters.value[index].open = !filters.value[index].open
}

const applyFilters = () => {
  alert('Фильтры применены')
}

const resetFilters = () => {
  filters.value.forEach(filter => {
    if (filter.type === 'radio') filter.selected = ''
    if (filter.type === 'search') filter.search = ''
  })
  price.value = { min: 500, max: 5000 }
}
</script>

<template>
  <aside class="lg:w-[270px] sticky left-0 top-0 h-screen lg:h-auto z-10 overflow-y-auto bg-[#fafbfc] rounded-xl shadow-sm px-6 py-6 hidden lg:block font-montserrat">
    <!-- Фильтры -->
    <div v-for="(filter, index) in filters" :key="index" class="mb-6">
      <button
        @click="toggleSection(index)"
        class="w-full text-left text-base font-semibold text-[#443472] flex justify-between items-center mb-2"
      >
        {{ filter.title }}
        <span class="text-sm text-gray-400">{{ filter.open ? '−' : '+' }}</span>
      </button>

      <div v-show="filter.open">
        <!-- Поиск -->
        <div v-if="filter.type === 'search'" class="mb-2">
          <input
            type="text"
            v-model="filter.search"
            placeholder="Поиск..."
            class="w-full border rounded px-3 py-1.5 text-sm text-[#443472] border-gray-300 focus:ring-1 focus:ring-[#443472] focus:outline-none"
          />
        </div>

        <!-- Чекбоксы -->
        <div
          v-if="filter.type === 'checkbox'"
          class="space-y-2 mt-2"
        >
          <label
            v-for="(option, i) in filter.options"
            :key="i"
            class="flex items-center gap-2 text-sm text-gray-800"
          >
            <input type="checkbox" class="accent-[#443472]" />
            {{ option }}
          </label>
        </div>

        <!-- Радио -->
        <div
          v-if="filter.type === 'radio'"
          class="space-y-2 mt-2"
        >
          <label
            v-for="(option, i) in filter.options"
            :key="i"
            class="flex items-center gap-2 text-sm text-gray-800"
          >
            <input
              type="radio"
              class="accent-[#443472]"
              :name="filter.title"
              :value="option"
              v-model="filter.selected"
            />
            {{ option }}
          </label>
        </div>

        <!-- Производитель с поиском -->
        <div
          v-if="filter.type === 'search'"
          class="space-y-2 mt-2 max-h-40 overflow-y-auto pr-1"
        >
          <label
            v-for="(option, i) in filter.options.filter(o => o.toLowerCase().includes(filter.search.toLowerCase()))"
            :key="i"
            class="flex items-center gap-2 text-sm text-gray-800"
          >
            <input type="checkbox" class="accent-[#443472]" />
            {{ option }}
          </label>
        </div>
      </div>
    </div>

    <!-- Интервальная цена -->
    <div class="mb-6">
      <h3 class="text-base font-semibold text-[#443472] mb-4">Цена</h3>
      <div class="flex gap-2 items-center text-sm mb-3">
        <input
          type="number"
          v-model.number="price.min"
          class="w-full border px-2 py-1 rounded text-sm text-[#443472] border-gray-300 focus:outline-none focus:ring-[#443472]"
          placeholder="от"
        />
        <span>–</span>
        <input
          type="number"
          v-model.number="price.max"
          class="w-full border px-2 py-1 rounded text-sm text-[#443472] border-gray-300 focus:outline-none focus:ring-[#443472]"
          placeholder="до"
        />
      </div>
    </div>

    <!-- Кнопки -->
    <div class="space-y-3 pt-4 border-t">
      <button
        class="w-full bg-[#443472] hover:bg-[#36295b] text-white text-sm py-2 rounded font-medium"
        @click="applyFilters"
      >
        Применить
      </button>
      <button
        class="w-full border border-[#443472] text-[#443472] text-sm py-2 rounded font-medium hover:bg-[#f1f0f5]"
        @click="resetFilters"
      >
        Сбросить фильтры
      </button>
    </div>
  </aside>
</template>
