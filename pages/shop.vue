<template>
  <div>
    <Navbar />
    <section class="bg-white py-8 mt-10 antialiased dark:bg-gray-900 md:py-16">
      <div class="container mx-auto grid-cols-1 p-4">
        <Breadcrumb :items="breadcrumbItems" />
      </div>
      <div
        class="container mx-auto flex flex-row justify-center sm:justify-center md:justify-between lg:justify-between items-center text-gray-500 dark:text-gray-400 px-4"
      >
        <SearchBar
          :searchQuery="searchQuery"
          @update:searchQuery="searchQuery = $event"
        />
        <p class="text-center flex-grow mx-4">
          Showing {{ filteredProducts.length }} results
        </p>
        <EditionDropdown
          :editions="editions"
          :selectedEditions="selectedEditions"
          @update:selectedEditions="updateSelectedEditions"
        />
      </div>
    </section>
    <ShopSection :products="filteredProducts" />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
import ShopSection from "../components/ShopSection.vue";
import Breadcrumb from "../components/Breadcrumb.vue";
import EditionDropdown from "../components/EditionDropdown.vue";
import SearchBar from "../components/SearchBar.vue";
import catalogData from "../data/catalog.json";

export default {
  components: {
    Navbar,
    Footer,
    ShopSection,
    Breadcrumb,
    EditionDropdown,
    SearchBar,
  },
  data() {
    return {
      breadcrumbItems: [
        { name: "Home", link: "/" },
        { name: "Shop", link: "/shop" },
      ],
      totalResults: catalogData.catalog.length,
      products: catalogData.catalog,
      searchQuery: "",
      selectedEditions: [],
      editions: [
        "Bike Edition",
        "Black & White Edition",
        "Games Edition",
        "Indonesia Edition",
        "Space Edition",
      ],
      filteredProducts: catalogData.catalog,
    };
  },
  methods: {
    filterProducts() {
      this.filteredProducts = this.products.filter((product) => {
        const matchesName =
          product.name &&
          product.name.toLowerCase().includes(this.searchQuery.toLowerCase());
        const matchesEdition =
          this.selectedEditions.length === 0 ||
          (product.edition && this.selectedEditions.includes(product.edition));
        const matchesImage = product.image_1;
        return matchesName && matchesEdition && matchesImage;
      });
    },
    sortProducts(criteria) {
      if (criteria === "popularity") {
        this.filteredProducts.sort((a, b) => b.popularity - a.popularity);
      } else if (criteria === "latest") {
        this.filteredProducts.sort(
          (a, b) => new Date(b.date) - new Date(a.date)
        );
      } else if (criteria === "priceLowToHigh") {
        this.filteredProducts.sort((a, b) => a.price - b.price);
      } else if (criteria === "priceHighToLow") {
        this.filteredProducts.sort((a, b) => b.price - a.price);
      }
    },
    updateSelectedEditions(newSelectedEditions) {
      this.selectedEditions = newSelectedEditions;
      this.filterProducts();
    },
  },
  watch: {
    searchQuery() {
      this.filterProducts();
    },
    selectedEditions() {
      this.filterProducts();
    },
  },
};
</script>
