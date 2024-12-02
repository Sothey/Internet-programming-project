<template>
    <div class="Container_Menu">
      <div class="Feature_Right">{{ Featured }}</div>
      <div class="Menu_bar">
        <ul>
          <li class="active"><a href="">All</a></li>
          <li><a href="">Milk & Dairies</a></li>
          <li><a href="">Coffees & Tea</a></li>
          <li><a href="">Pet Foods</a></li>
          <li><a href="">Meats</a></li>
          <li><a href="">Vegetables</a></li>
          <li><a href="">Fruits</a></li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "Menu",
    props: ["Featured"],
  };
  </script>
  
  <style scoped>
  @import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
  .Container_Menu {
    width: 99%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .Container_Menu .Feature_Right {
    font-family: "Quicksand", sans-serif;
    font-size: 32px;
    font-weight: 700;
    background: linear-gradient(
      90deg,
      rgba(118, 161, 67, 1) 28%,
      rgba(9, 9, 121, 1) 83%
    );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .Container_Menu .Menu_bar {
    font-family: "Quicksand", sans-serif;
    font-size: 16px;
    font-weight: 400;
  }
  .Container_Menu .Menu_bar ul {
    width: 750px;
    height: 24px;
    display: flex;
    justify-content: end;
    align-items: center;
    gap: 30px;
  }
  .Container_Menu .Menu_bar ul .active {
    font-weight: 700;
    color: rgba(9, 9, 121, 1);
  }
  .Container_Menu .Menu_bar ul li {
    list-style: none;
  }
  .Container_Menu .Menu_bar ul li a {
    text-decoration: none;
    color: rgba(37, 61, 78, 1);
  }
  .Container_Menu .Menu_bar a:hover {
    font-weight: 700;
  }
  /* .Container_Menu .Menu_bar ul li a:hover {
    padding: 10px;
    font-weight: 700;
    transform: translate(5px, 5px);
    cursor: pointer;
  } */
  </style>
  