<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { useVModel } from '@vueuse/core'
import { cn } from '@/lib/utils'

const props = defineProps<{
  value: string | number // valor do radio em si
  modelValue?: string | number // valor que está selecionado
  class?: HTMLAttributes['class']
  name: string // importante para agrupar rádios
}>()

const emits = defineEmits<{
  (e: 'update:modelValue', payload: string | number): void
}>()

const modelValue = useVModel(props, 'modelValue', emits, {
  passive: true,
})
</script>

<template>
  <label :class="cn('inline-flex items-center gap-2 cursor-pointer', props.class)">
    <input
      type="radio"
      :name="name"
      :value="value"
      v-model="modelValue"
      class="h-4 w-4 border-input text-primary focus:ring-2 focus:ring-ring/50 disabled:opacity-50"
    />
    <slot />
  </label>
</template>
