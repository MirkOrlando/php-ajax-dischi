<template>
  <div id="app">
    <header class="p-2 d-flex justify-content-between align-items-center">
      <div class="logo">
        <img class="img-fluid" src="@/assets/img/spotify-logo.png" alt="logo" />
      </div>
      <form action="#">
        <select name="genre" id="" v-model="genreSelected" @change="call_api">
          <option value="">All</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Jazz">Jazz</option>
          <option value="Metal">Metal</option>
        </select>
      </form>
    </header>
    <main>
      <div class="container py-4">
        <div
          class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3"
        >
          <div class="col" v-for="(album, index) in albums" :key="index">
            <div class="card h-100 p-3 text-center">
              <div class="card_poster">
                <img
                  class="card-img-top img-fluid h-100"
                  :src="album.poster"
                  :alt="album.title"
                />
              </div>
              <div class="card-body p-0 pt-4">
                <h4 class="card-title text-uppercase fw-bold">
                  {{ album.title }}
                </h4>
                <div class="card-text">
                  <div class="author">{{ album.author }}</div>
                  <div class="year">{{ album.year }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-center text-white py-3">Copyright &copy;</footer>
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
      genreSelected: "",
    };
  },
  methods: {
    call_api() {
      console.log("calling");
      console.log(this.genreSelected);
      axios
        .get(
          `http://localhost/PHP/php-ajax-dischi/milestone_2/src/assets/genre.php/?genre=${this.genreSelected}`
        )
        .then((response) => {
          //console.log(response);
          this.albums = response.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  mounted() {
    this.call_api();
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
