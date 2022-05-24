<template>
  <div id="app">
    <header class="py-2">
      <div class="logo">
        <img class="img-fluid" src="@/assets/img/spotify-logo.png" alt="logo" />
      </div>
    </header>
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
@import "~/src/assets/scss/style";
header {
  background-color: #2e3a46;
}

header .logo {
  width: 70px;
}

main {
  min-height: 100vh;
  background-color: #1e2d3b;
}

.card {
  background-color: #2e3a46;
}

.card_poster {
  aspect-ratio: 1 / 1;
}

.card .card-title {
  color: white;
}

.card .card-text {
  color: #808080;
}

footer {
  background-color: #1e2d3b;
}
</style>
