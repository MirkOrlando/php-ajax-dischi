<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png" />
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "App",
  components: {},
  data() {
    return {
      albums: null,
    };
  },
  mounted() {
    axios
      .get("http://localhost/PHP/php-ajax-dischi/milestone_1/db.php")
      .then((response) => {
        //console.log(response);
        this.albums = response.data;
      })
      .catch((err) => {
        console.log(err);
      });
  },
};
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
