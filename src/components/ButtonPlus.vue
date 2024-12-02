<template>
    <div class="btn">
      <input type="number" name="" id="input_amout" min="0" value="1" />
    </div>
  </template>
  
  <script>
  export default {
    name: "ButtonPlus",
  };
  </script>
  
  <style scoped>
  @import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
  .btn {
    width: 75px;
    height: 30px;
    border-radius: 4px;
    border: 2px solid rgba(59, 183, 126, 1);
    color: rgba(59, 183, 126, 1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 6px 0px 6px;
    font-family: "Quicksand", sans-serif;
    font-weight: 700;
  }
  input {
    width: 70px;
    border: none;
    color: rgba(59, 183, 126, 1);
    outline: none;
    font-size: 15px;
  }
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    opacity: 1;
    color: #3bb77e;
  }
  </style>
  