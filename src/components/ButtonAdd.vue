<template>
    <div class="btn">
      <div class="btntext">Add</div>
      <button class="btnadd">+</button>
    </div>
  </template>
  
  <script>
  export default {
    name: "ButtonAdd",
  };
  </script>
  
  <style scoped>
  @import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
  .btn {
    width: 75px;
    height: 30px;
    border-radius: 4px;
    color: rgba(59, 183, 126, 1);
    background-color: #def9ec;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 6px 0px 6px;
    font-family: "Quicksand", sans-serif;
    font-weight: 700;
  }
  .btntext {
    font-size: 16px;
  }
  .btnadd {
    border: none;
    background-color: #def9ec;
    color: rgba(59, 183, 126, 1);
    font-size: 18px;
  }
  </style>
  