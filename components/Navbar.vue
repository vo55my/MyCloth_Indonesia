<template>
  <nav
    class="fixed top-0 left-0 right-0 bg-white border-gray-200 dark:bg-gray-900 z-50"
  >
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/images/Slide/Logo.png" class="h-12" alt="MyCloth Logo" />
      </a>
      <button
        data-collapse-toggle="navbar-default"
        type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 17 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15"
          />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:bg-white dark:bg-gray-900"
        >
          <li>
            <a
              href="/"
              class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-900 md:p-0 dark:text-white md:dark:hover:text-red-900 dark:hover:bg-gray-700 dark:hover:text-red-900 md:dark:hover:bg-transparent"
              aria-current="page"
              >Home</a
            >
          </li>
          <li>
            <!-- Desktop Dropdown -->
            <div class="hidden md:block">
              <button
                id="dropdownNavbarLink"
                data-dropdown-toggle="dropdownNavbar"
                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-900 md:p-0 md:w-auto dark:text-white md:dark:hover:text-red-900 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
              >
                Store
                <svg
                  class="w-2.5 h-2.5 ms-2.5"
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
                id="dropdownNavbar"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-25 dark:bg-gray-700 dark:divide-gray-600"
              >
                <ul
                  class="py-2 text-sm text-gray-700 dark:text-gray-400"
                  aria-labelledby="dropdownLargeButton"
                >
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                      >Shopee</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                      >Tokopedia</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                      >Lazada</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <!-- Mobile Accordion -->
            <div class="md:hidden">
              <button
                @click="storeAccordionOpen = !storeAccordionOpen"
                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
              >
                Store
                <svg
                  class="w-2.5 h-2.5 ms-2.5 transition-transform"
                  :class="{'rotate-180': storeAccordionOpen}"
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
              <div v-show="storeAccordionOpen" class="pl-4">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                      >Shopee</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                      >Tokopedia</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                      >Lazada</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <a
              href="#edition"
              class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-900 md:p-0 dark:text-white md:dark:hover:text-red-900 dark:hover:bg-gray-700 dark:hover:text-red-900 md:dark:hover:bg-transparent"
              >Edition</a
            >
          </li>
          <li>
            <a
              href="#catalog"
              class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-900 md:p-0 dark:text-white md:dark:hover:text-red-900 dark:hover:bg-gray-700 dark:hover:text-red-900 md:dark:hover:bg-transparent"
              >Catalog</a
            >
          </li>
          <li>
            <a
              href="/shop"
              class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-900 md:p-0 dark:text-white md:dark:hover:text-red-900 dark:hover:bg-gray-700 dark:hover:text-red-900 md:dark:hover:bg-transparent"
              >Shop</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      storeAccordionOpen: false,
    };
  },
};
</script>
