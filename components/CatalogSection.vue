<template>
  <section
    id="catalog"
    class="antialiased bg-white pb-10 pt-20 dark:bg-gray-900 md:py-16 px-4"
  >
    <h1
      class="text-center mb-3 text-4xl font-bold tracking-tight text-gray-900 dark:text-white"
    >
      Catalog
    </h1>
    <hr class="w-30 h-1 mx-auto bg-gray-100 border-0 dark:bg-gray-700 mb-5" />
    <div
      class="container mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:px-4"
    >
      <ProductCard
        v-for="item in relatedProducts"
        :key="item.id"
        :image_1="item.image_1"
        :edition="item.edition"
        :name="item.name"
        :price="item.price"
      />
    </div>
  </section>
</template>

<script>
import ProductCard from "./ProductCard.vue";
import catalogData from "../data/catalog.json";

export default {
  components: {
    ProductCard,
  },
  data() {
    return {};
  },
  computed: {
    relatedProducts() {
      return this.getRandomRelatedProducts(catalogData.catalog.slice(1), 4);
    },
  },
  methods: {
    getRandomRelatedProducts(products, limit) {
      if (!products.length) {
        return [];
      }
      if (limit > products.length) {
        limit = products.length;
      }
      const shuffled = [...products];
      for (let i = shuffled.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
      }
      return shuffled.slice(0, limit);
    },
  },
};
</script>
