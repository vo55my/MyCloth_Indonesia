import Vue from 'vue';
import Router from 'vue-router';
import Home from '../pages/index.vue';
import Shop from '../pages/shop.vue';
import Product from '../pages/product.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home,
    },
    {
      path: '/shop',
      name: 'Shop',
      component: Shop,
    },
    {
      path: '/product/:id',
      name: 'Product',
      component: Product,
    },
  ],
});
