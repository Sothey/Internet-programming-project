<template>
    <button class="Button-Box" :style="{ backgroundColor: bgBtn }">
      <div class="Text">{{ TextBtn }}</div>
      <font-awesome-icon :icon="['fas', 'arrow-right-long']" class="arrow" />
    </button>
  </template>
  
  <script>
  import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
  import { fas } from "@fortawesome/free-solid-svg-icons";
  import { library } from "@fortawesome/fontawesome-svg-core";
  
  library.add(fas);
  
  export default {
    name: "Button",
    // props: {
    //   TextBtn: String,
    //   bgBtn: String,
    // },
    props: ["TextBtn", "bgBtn"],
    components: {
      FontAwesomeIcon,
    },
  };
  </script>
  
  <style scoped>
  .Button-Box {
    width: 170px;
    height: 55px;
    border-radius: 3px;
    /* border: 2px solid white; */
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .Button-Box:hover {
    box-shadow: 5px 5px 5px rgba(129, 177, 61, 1);
    transform: translate(5px, 5px);
    cursor: pointer;
  }
  .arrow {
    color: white;
    width: 60px;
    height: 25px;
  }
  .Text {
    font-family: "Quicksand", sans-serif;
    font-size: 18px;
    font-weight: 800;
    color: white;
  }
  </style>
  