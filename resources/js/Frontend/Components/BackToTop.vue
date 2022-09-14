<script setup>
import {Link} from "@inertiajs/inertia-vue3";
import {scrollTo} from "@/Plugins/chore";
</script>

<template>
    <Link
        class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark"
        @click="scrollTo(document.documentElement);"
    >
      <span
          class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
      ></span>
    </Link>
</template>
