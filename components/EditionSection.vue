<template>
  <section
    id="edition"
    class="antialiased bg-white dark:bg-gray-900 md:py-16 pb-10 pt-20 px-4"
  >
    <h1
      class="dark:text-white font-bold leading-none lg:text-4xl mb-3 md:text-3xl text-4xl text-center text-gray-900 tracking-tight"
    >
      Edition
    </h1>
    <hr class="border-0 bg-gray-100 dark:bg-gray-700 h-1 mb-5 mx-auto w-25" />
    <div
      class="container gap-4 grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 mx-auto sm:mx-10 sm:grid-cols-2"
    >
      <div class="flex justify-center">
        <img
          class="h-auto rounded-lg max-w-full"
          src="/images/Edition/Bike.png"
          alt="Bike Edition"
        />
      </div>
      <div class="flex justify-center">
        <img
          class="h-auto max-w-full rounded-lg"
          src="/images/Edition/BW.png"
          alt="BW Edition"
        />
      </div>
      <div class="flex justify-center">
        <img
          class="h-auto max-w-full rounded-lg"
          src="/images/Edition/Games.png"
          alt="Games Edition"
        />
      </div>
      <div class="flex justify-center">
        <figure
          class="cursor-pointer filter grayscale max-w-sm relative transition-all duration-300"
        >
          <a href="/shop">
            <img
              class="blur-xs duration-300 hover:blur-none rounded-lg transition-all"
              src="/images/Edition/Space.png"
              alt="All Editions"
            />
          </a>
          <figcaption
            class="absolute flex inset-0 items-center justify-center px-4 text-white text-lg"
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
