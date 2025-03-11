<template>
  <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 px-4">
    <div
      class="container mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:px-4"
    >
      <ProductCard
        v-for="product in products"
        :key="product.id"
        :image_1="product.image_1"
        :name="product.name"
        :edition="product.edition"
        :price="product.price"
      />
    </div>
  </section>
</template>

<script>
import ProductCard from "./ProductCard.vue";

export default {
  components: {
    ProductCard,
  },
  props: {
    products: {
      type: Array,
      required: true,
    },
  },
};
</script>
