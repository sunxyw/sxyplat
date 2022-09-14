<script setup>
defineProps({
    type: {
        type: String,
        default: 'text'
    },
    placeholder: {
        type: String,
        default: ''
    },
    modelValue: {
        type: String,
        default: ''
    },
    readonly: {
        type: Boolean,
        default: false
    },
    error: {
        type: String,
        default: ''
    },
})

defineEmits(['update:modelValue'])
</script>

<template>
    <!-- Input -->
    <input
        class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none"
        :type="type"
        :placeholder="placeholder"
        :readonly="readonly"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value); modelValue = $event.target.value"
    />
    <!-- Error -->
    <div class="text-red-500 text-sm mt-1" v-if="error">
        {{ error }}
    </div>
</template>
