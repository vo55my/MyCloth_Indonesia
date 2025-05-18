<template>
  <div
    class="w-full max-w-sm rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
  >
    <a :href="productUrl">
      <img class="p-6 rounded-t-lg" :src="image_1" alt="Product Image" />
    </a>
    <div class="px-5 pb-5">
      <a :href="productUrl">
        <h5
          class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center"
        >
          {{ name }}
        </h5>
      </a>
      <p class="text-center dark:text-white pb-4">
        {{ edition }}
      </p>
      <div
        class="flex flex-wrap items-center md:justify-between gap-2 justify-center"
      >
        <span class="text-xl font-bold text-gray-900 dark:text-white">{{
          price
        }}</span>
        <!-- Ganti tombol dengan ShopButton -->
        <ShopButton
          :shopeeUrl="shopeeUrl"
          :tokopediaUrl="tokopediaUrl"
          :lazadaUrl="lazadaUrl"
        />
      </div>
    </div>
  </div>
</template>

<script>
import ShopButton from "./ShopButton.vue";

export default {
  components: {
    ShopButton,
  },
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
    shopeeUrl: {
      type: String,
      required: true,
    },
    tokopediaUrl: {
      type: String,
      required: true,
    },
    lazadaUrl: {
      type: String,
      required: true,
    },
  },
};
</script>
