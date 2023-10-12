const { createApp } = Vue;
createApp({
  data() {
    return {
      songs: null,
    };
  },

  methods: {},
  mounted() {
    axios.get("server.php").then((response) => {
      console.log(response);
      this.songs = response.data;
    });
  },
}).mount("#app");
