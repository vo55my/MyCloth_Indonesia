<template>
  <div
    class="w-full max-w-sm rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
  >
    <a :href="`/product/${id}`">
      <img class="p-6 rounded-t-lg" :src="image_1" alt="Product Image" />
    </a>
    <div class="px-5 pb-5">
      <a :href="`/product/${id}`">
        <h5
          class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center"
        >
          {{ name }}
        </h5>
      </a>
      <div class="text-center dark:text-white pb-4">
        {{ edition }}
      </div>
      <div
        class="flex flex-wrap items-center md:justify-between gap-2 justify-center"
      >
        <span class="text-xl font-bold text-gray-900 dark:text-white">{{
          price
        }}</span>
        <a
          :href="`/product/${id}`"
          class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
          >Shop now</a
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    id: {
      type: String,
      required: true,
    },
    image_1: {
      type: String,
      required: true,
    },
    image_2: {
      type: String,
      required: true,
    },
    edition: {
      type: String,
      required: true,
    },
    name: {
      type: String,
      required: true,
    },
    price: {
      type: String,
      required: true,
    },
  },
};
</script>
