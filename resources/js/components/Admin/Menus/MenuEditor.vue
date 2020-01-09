<template>
  <div>
    <h1>Menu Editor</h1>
    <!-- Router view is a placeholder component that will take on the identity of the component for the current route -->
    <router-view></router-view>
  </div>
</template>

<script>
import VueRouter from "vue-router";
import CategoryManager from "../Categories/CategoryManager.vue";
import MenuItem from "./MenuItem.vue";

export default {
  router: new VueRouter({
    routes: [
      {
        path: "/categories",
        name: "categories",
        component: CategoryManager
      },
      {
        path: "/",
        redirect: { name: "categories" }
      },
      {
        path: "/add-item",
        name: "add-item",
        component: MenuItem
      }
    ]
  })
};
</script>