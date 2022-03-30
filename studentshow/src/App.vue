<template>
  <div id="app">
    <NavBar />
    <router-view></router-view>
  </div>
</template>

<script>
//import HelloWorld from "./components/HelloWorld.vue";
import NavBar from "./components/NavBar.vue";
export default {
  name: "App",
  components: {
    //HelloWorld,
    NavBar,
  },
  data() {
    return {};
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  background-color: #f0ffff;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
