<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { useVModel } from '@vueuse/core'
import { cn } from '@/lib/utils'

const props = defineProps<{
  value: string | number 
  modelValue?: string | number
  class?: HTMLAttributes['class']
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
      :value="value"
      v-model="modelValue"
      class="h-4 w-4 border-input text-primary focus:ring-2 focus:ring-ring/50 disabled:opacity-50"
    />
    <slot />
  </label>
</template>
