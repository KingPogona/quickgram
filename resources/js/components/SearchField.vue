<template>
  <div class="container">
    <!-- <button class="btn btn-primary ms-4" @click="followUser" v-text="buttonText"></button> -->
    <div class="dropdown show mx-auto w-50">
      <input
        class="form-control"
        v-model="searchTerm"
        v-on:input="search"
        placeholder="Search"
      />
      <ul
        class="dropdown-menu w-100 py-0"
        id="search-dropdown"
        aria-labelledby="dropdownMenuLink"
      >
        <search-dropdown-element
          v-for="(result, index) in searchResults"
          :result="result"
          :index="index"
          :key="result.id"
        >
        </search-dropdown-element>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  // props: ['userId', 'follows'],

  mounted() {
    console.log("Component mounted.");
  },

  data: function () {
    return {
      searchTerm: this.searchTerm,
      searchResults: [],
    };
  },

  methods: {
    search() {
      // console.log(this.searchTerm);
      //   console.log(document.getElementById('search-dropdown').className)
      let searchDropdownEl = document.getElementById("search-dropdown");

      //   console.log(searchDropdownEl.className);

      if (searchDropdownEl.className == "dropdown-menu w-100 py-0") {
        searchDropdownEl.classList.add("show");
        //   element.classList.remove("my-class");
      }

      axios
        .get("/search/" + this.searchTerm, {
          //   params: {
          //     searchTerm: this.searchTerm,
          //   },
        })
        .then((response) => {
          Vue.set((this.searchResults = response.data));

          console.log(this.searchResults[0]);
        })
        .catch((err) => {
          console.log(err);

          this.searchResults = [];
        });
    },
  },

  //   computed: {
  //     results() {
  //       return this.searchResults.length;
  //     },
  //   },
};
</script>
