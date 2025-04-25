<template>
  <div class="relative">
    <button
      id="dropdownSearchButton"
      data-dropdown-toggle="dropdownSearch"
      class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
      type="button"
    >
      Edition
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
    <div
      id="dropdownSearch"
      class="z-10 hidden bg-white rounded-lg shadow-sm w-56 dark:bg-gray-700"
    >
      <ul
        class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
        aria-labelledby="dropdownSearchButton"
      >
        <li v-for="edition in editions" :key="edition">
          <div
            class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600"
          >
            <input
              :id="'checkbox-item-' + edition"
              type="checkbox"
              :value="edition"
              :checked="selectedEditions.includes(edition)"
              @change="toggleEdition(edition)"
              class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
            />
            <label
              :for="'checkbox-item-' + edition"
              class="w-full ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              {{ edition }}
            </label>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    editions: {
      type: Array,
      required: true,
    },
    selectedEditions: {
      type: Array,
      required: true,
    },
  },
  methods: {
    toggleEdition(edition) {
      const index = this.selectedEditions.indexOf(edition);
      if (index > -1) {
        this.selectedEditions.splice(index, 1);
      } else {
        this.selectedEditions.push(edition);
      }
      this.$emit("update:selectedEditions", this.selectedEditions);
    },
  },
};
</script>
