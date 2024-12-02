<!-- <template>
  <h1>"This is my first VueJs project"</h1>
</template>  -->

<template>
  <div class="Container_Box">
    <SuperProduct />
  </div>
</template>

<script>
import SuperProduct from "./views/SuperProduct.vue";
import Menu from "./components/Menu.vue";
export default {
  name: "App",
  components: {
    SuperProduct,
    Menu,
  },
};
</script>

<style>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
.Container_Box {
  margin: auto;
  width: 1540px;
}
</style>
