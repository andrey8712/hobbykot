<script setup lang="ts">
import { Checkbox } from '@/components/ui/checkbox'

const filters = [
  {
    title: 'Размеры, мм',
    options: ['50х40', '60х50'],
  },
  {
    title: 'Сюжет',
    options: ['Городской пейзаж', 'Люди'],
  },
]
</script>

<template>
  <aside
    class="lg:w-[270px] sticky left-0 top-0 h-screen lg:h-auto z-10 overflow-y-auto bg-[#fafbfc] rounded-xl shadow-sm px-6 py-6 hidden lg:block"
  >
    <div v-for="(filter, index) in filters" :key="index" class="mb-8">
      <h3 class="text-base font-semibold text-[#443472] mb-4">
        {{ filter.title }}
      </h3>
      <div class="space-y-3">
        <div
          v-for="(option, i) in filter.options"
          :key="`${index}-${i}`"
          class="flex items-center gap-3"
        >
          <Checkbox :id="`filter-${index}-${i}`" />
          <label
            :for="`filter-${index}-${i}`"
            class="text-sm text-gray-700 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
          >
            {{ option }}
          </label>
        </div>
      </div>
    </div>
  </aside>
</template>

<style scoped>
</style>
