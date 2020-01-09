<template>
  <div>
    <h1>Menu Editor</h1>
    <router-link :to="{name: 'categories'}">Categories</router-link>
    <router-link :to="{name: 'add-item'}">Add Item</router-link>
    <!-- Router view is a placeholder component that will take on the identity of the component for the current route -->
    <router-view :initial-categories="categories"></router-view>
  </div>
</template>

<script>
import VueRouter from "vue-router";
import CategoryManager from "../Categories/CategoryManager.vue";
import MenuItem from "./MenuItem.vue";

export default {
  props: ["categories"],
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

<style scoped>
a {
  border: solid 1px black;
  padding: 10px;
  margin: 0;
}
.router-link-active {
  font-weight: bold;
  border-bottom: none;
}
</style>