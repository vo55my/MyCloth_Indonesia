<template>
  <section
    id="edition"
    class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 px-4"
  >
    <h1
      class="text-center mb-3 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white"
    >
      Edition
    </h1>
    <hr class="w-25 h-1 mx-auto bg-gray-100 border-0 dark:bg-gray-700 mb-5" />
    <div
      class="container mx-auto grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 sm:mx-10 gap-4"
    >
      <div class="flex justify-center">
        <img
          class="h-auto max-w-full rounded-lg"
          src="/img/Edition/Bike.png"
          alt=""
        />
      </div>
      <div class="flex justify-center">
        <img
          class="h-auto max-w-full rounded-lg"
          src="/img/Edition/BW.png"
          alt=""
        />
      </div>
      <div class="flex justify-center">
        <img
          class="h-auto max-w-full rounded-lg"
          src="/img/Edition/Games.png"
          alt=""
        />
      </div>
      <div class="flex justify-center">
        <figure
          class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale"
        >
          <a href="/shop">
            <img
              class="rounded-lg transition-all duration-300 blur-xs hover:blur-none"
              src="/img/Edition/Space.png"
              alt="image description"
            />
          </a>
          <figcaption
            class="absolute inset-0 flex items-center justify-center px-4 text-lg text-white"
          >
            <a href="/shop">
              <p class="text-3xl font-bold text-center">View More</p>
            </a>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>
</template>
