<template>
  <div>
    <Navbar />
    <section class="bg-white py-8 mt-10 antialiased dark:bg-gray-900 md:py-16">
      <div class="container mx-auto grid-cols-1 p-4">
        <nav class="flex" aria-label="Breadcrumb">
          <ol
            class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse"
          >
            <li class="inline-flex items-center">
              <a
                href="#"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-red-600 dark:text-gray-400 dark:hover:text-white"
              >
                <svg
                  class="w-3 h-3 me-2.5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                  />
                </svg>
                Home
              </a>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg
                  class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 6 10"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 9 4-4-4-4"
                  />
                </svg>
                <span
                  class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                  >Shop</span
                >
              </div>
            </li>
          </ol>
        </nav>
      </div>
      <h1 class="text-center text-3xl font-bold text-gray-900 dark:text-white">
        {{ product.name }}
      </h1>
      <h2 class="text-center text-xl text-gray-900 dark:text-white mb-2">
        {{ product.edition }}
      </h2>
      <hr
        class="w-20 h-1 mx-auto bg-gray-100 border-0 dark:bg-gray-700 mb-10"
      />
      <div
        class="container mx-auto grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 sm:px-4"
      >
        <div id="gallery" class="relative w-full" data-carousel="slide">
          <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img
                :src="product.image_1"
                class="absolute block max-w-xs h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt=""
              />
            </div>
            <div
              class="hidden duration-700 ease-in-out"
              data-carousel-item="active"
            >
              <img
                :src="product.image_2"
                class="absolute block max-w-xs h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt=""
              />
            </div>
          </div>
          <button
            type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev
          >
            <span
              class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
            >
              <svg
                class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 1 1 5l4 4"
                />
              </svg>
              <span class="sr-only">Previous</span>
            </span>
          </button>
          <button
            type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next
          >
            <span
              class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
            >
              <svg
                class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 9 4-4-4-4"
                />
              </svg>
              <span class="sr-only">Next</span>
            </span>
          </button>
        </div>
        <div class="max-w-lg text-center">
          <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ product.price }}
          </h2>
          <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-5">
            Deskripsi
          </h2>
          <hr
            class="w-20 h-1 mx-auto bg-gray-100 border-0 dark:bg-gray-700 my-2"
          />
          <p class="mt-2 text-md text-gray-500 dark:text-gray-400">
            Bahan: {{ product.material }} <br />
            Warna: {{ product.color }} <br />Ukuran: {{ product.size }}
          </p>
          <p class="text-md text-gray-500 dark:text-gray-400">
            Lingkar Dada x Panjang Badan: <br />
            S: 54-56 CM x 71-73 CM <br />
            M: 57-59 CM x 74-76 CM <br />
            L: 60-62 CM x 77-78 CM <br />
            XL: 63-65 CM x 79-80 CM <br />
            XXL: 66-68 CM x 80-81 CM
          </p>
          <div class="mt-4 flex flex-row items-center justify-center space-x-4">
            <button
              id="dropdownDefaultButton"
              data-dropdown-toggle="dropdown"
              class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
              type="button"
            >
              Shop Now
              <svg
                class="w-2.5 h-2.5 ms-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 4 4 4-4"
                />
              </svg>
            </button>
            <div
              id="dropdown"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700"
            >
              <ul
                class="py-2 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownDefaultButton"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Shopee</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Tokopedia</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    >Lazada</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <h1 class="text-center text-2xl font-bold dark:text-white mt-10">
        Related Products
      </h1>
      <hr
        class="w-48 h-1 mx-auto bg-gray-100 border-0 dark:bg-gray-700 mt-2 mb-10"
      />
      <div
        class="container mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4"
      >
        <ProductCard
          v-for="(item, index) in relatedProducts"
          :key="index"
          :id="item.id"
          :image_1="item.image_1"
          :edition="item.edition"
          :name="item.name"
          :price="item.price"
        />
      </div>
    </section>
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
import ProductCard from "../components/ProductCard.vue";
import catalogData from "../data/catalog.json";

export default {
  components: {
    Navbar,
    Footer,
    ProductCard,
  },
  data() {
    return {
      product: {},
      relatedProducts: [],
    };
  },
  created() {
    const productId = this.$route.params.id;
    this.product = catalogData.catalog.find((item) => item.id === productId);
    this.relatedProducts = this.getRandomRelatedProducts(
      catalogData.catalog.filter((item) => item.id !== productId),
      4
    );
  },
  methods: {
    getRandomRelatedProducts(products, limit) {
      const shuffled = products.sort(() => 0.5 - Math.random());
      return shuffled.slice(0, limit);
    },
  },
};
</script>
