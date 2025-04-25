<template>
  <div>
    <NuxtLink rel="shortcut icon" href="/images/Slide/favicon.ico" type="image/x-icon"></NuxtLink>
    <Navbar />
    <Carousel />
    <StoreSection />
    <EditionSection />
    <CatalogSection />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Carousel from "../components/Carousel.vue";
import StoreSection from "../components/StoreSection.vue";
import EditionSection from "../components/EditionSection.vue";
import CatalogSection from "../components/CatalogSection.vue";
import Footer from "../components/Footer.vue";
import NuxtLink from "nuxt-link";

export default {
  components: {
    Navbar,
    Carousel,
    StoreSection,
    EditionSection,
    CatalogSection,
    Footer,
  },
};
</script>
