<template>
  <div id="app">
    <header>SITE HEADER HERE</header>
    <main>SITE MAIN HERE</main>
    <footer>SITE FOOTER HERE</footer>
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
}
</style>
