// https://nuxt.com/docs/api/configuration/nuxt-config
import { defineNuxtConfig } from "nuxt/config";
import tailwindcss from "@tailwindcss/vite";

export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },
  css: ["./assets/css/main.css"],
  app: {
    head: {
      title: "MyCloth Indonesia",
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        {
          hid: "description",
          name: "description",
          content: "MyCloth Indonesia Official Website",
        },
      ],
      link: [
        {
          rel: "stylesheet",
          href: "https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css",
        },
        {
          rel: "icon",
          type: "image/x-icon",
          href: "/images/Slide/favicon.ico",
        },
      ],
      style: [],
      script: [
        {
          src: "https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js",
        },
        {
          src: "https://unpkg.com/@tailwindcss/browser@4",
        },
      ],
    },
  },
});
