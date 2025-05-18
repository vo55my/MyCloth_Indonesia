<template>
  <div class="relative">
    <button
      @click="toggleDropdown"
      id="dropdownDefaultButton"
      class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
      type="button"
    >
      Shop now
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

    <!-- Dropdown menu -->
    <div
      v-show="dropdownOpen"
      id="dropdown"
      class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-30 dark:bg-gray-700 absolute mt-2"
    >
      <ul
        class="py-2 text-sm text-gray-700 dark:text-gray-200"
        aria-labelledby="dropdownDefaultButton"
      >
        <li>
          <a
            :href="shopeeUrl"
            target="_blank"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >Shopee</a
          >
        </li>
        <li>
          <a
            :href="tokopediaUrl"
            target="_blank"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >Tokopedia</a
          >
        </li>
        <li>
          <a
            :href="lazadaUrl"
            target="_blank"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >Lazada</a
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "ShopButton",
  props: {
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
  data() {
    return {
      dropdownOpen: false,
    };
  },
  methods: {
    toggleDropdown() {
      this.dropdownOpen = !this.dropdownOpen;
    },
  },
};
</script>
