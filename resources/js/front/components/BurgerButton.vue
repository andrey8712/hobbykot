<script setup lang="ts">
defineProps<{ open: boolean }>()
</script>

<template>
  <button class="group w-8 h-8 relative flex flex-col justify-center items-center" aria-label="Открыть каталог">
    <span
      class="block w-6 h-[2px] bg-[#fafbfc] lg:bg-[#ffffff] rounded transition-transform duration-300 ease-in-out"
      :class="open ? 'rotate-45 translate-y-[6px]' : ''"
    />
    <span
      class="block w-6 h-[2px] bg-[#fafbfc] lg:bg-[#ffffff] rounded my-[5px] transition-opacity duration-300 ease-in-out"
      :class="open ? 'opacity-0' : ''"
    />
    <span
      class="block w-6 h-[2px] bg-[#fafbfc] lg:bg-[#ffffff] rounded transition-transform duration-300 ease-in-out"
      :class="open ? '-rotate-45 -translate-y-[6px]' : ''"
    />
  </button>
</template>
