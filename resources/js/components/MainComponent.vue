<template>
  <v-container>
    <v-app>
      <!-- <div class="d-flex child-flex flex-wrap"> -->
      <div
        class="pb-2 mb-2 d-flex align-content-center flex-wrap flex-md-wrap justify-start justify-xl-start justify-md-start"
      >
        <v-card
          v-for="category in categories"
          v-bind:key="category.id"
          class="mx-auto pa-xs-1 mb-2 justify-center"
          width="180"
          height="80"
          outlined
          raised
          color="#f2f2f2"
        >
          <a v-bind:href="'#'">
            <v-layout justify-center align-center>
              <v-card-title>{{ category.name }}</v-card-title>
              <v-icon x-large>info</v-icon>
            </v-layout>
          </a>
        </v-card>
      </div>
      <v-layout justify-center align-center>
        <v-btn
          :href="'/advertisement/create'"
          x-large
          outlined
          color="success"
          dark
        >Dodaj ogłoszenie</v-btn>
      </v-layout>
      <v-layout justify-center align-center mb-1>
        <v-icon class="mr-3">error_outline</v-icon>
        <div>Najnowsze ogłoszenia</div>
      </v-layout>
      <div
        class="pb-4 mb-6 d-flex align-content-center flex-wrap flex-md-wrap justify-start justify-xl-start justify-md-start"
      >
        <v-card
          v-for="advertisement in advertisements"
          v-bind:key="advertisement.id"
          class="mx-auto pa-xs-1 mb-2"
          width="200"
          height="auto"
          outlined
          raised
          color="#f2f2f2"
        >
          <a v-bind:href="'/advertisement/' + advertisement.id">
            <v-card-title class="mt-1">{{ advertisement.title }}</v-card-title>
            <div class="ml-4" v-if="advertisement.post_images[0]">
              <img
                :src="
                        'storage' +
                            advertisement.post_images[0]
                                .advertisement_image_path
                    "
                alt="ccccc"
                title="ccc"
                width="150"
                height="auto"
              />
            </div>
            <v-card-subtitle>{{ advertisement.price }} PLN</v-card-subtitle>
            <v-card-text>
              {{
              advertisement.description
              }}
            </v-card-text>
          </a>
          <div class="ml-4">{{ user }}</div>
        </v-card>
      </div>
      <footer-component :msg="message" />
    </v-app>
  </v-container>
</template>

<script>
export default {
  props: ["auth", "categories", "advertisements"],
  data: function() {
    return {
      message: "test wiadomosci",
      user: "",
      access_token:
        "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYWY0MjViM2RlNjczMDU2NTI5MDg2NjJkMmE0YWU3ZGQ1NzBhNTU1MjFiNWIxZjg5Mjg0MWRhZGRkMWYwNWMzZjAwNWU4Mjg4YWY3OTNjOTAiLCJpYXQiOjE1NzY1NzQ0ODMsIm5iZiI6MTU3NjU3NDQ4MywiZXhwIjoxNjA4MTk2ODgzLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.o_9PaG9GbI-5Fs8l2gpXBlrAho2JxPlwvLmGG7gSId5SrBP428DXJfSqHodlZJwlkPOJ_JNg-jRtb8G8KqGJSy7Xkx9TeJySJqWZhwpH5ZI34tQqxjhbSk8h16J25mYn4ZRybPgQ8ES0-igSemS9OuTK9gpUrNwpDB44ER2T5iT57uAneguHAP5P_gd9RMvtvAysizKCkSRjg0hMiMmMtafw6iUJMAdSNlJwaBZciuuirZrpOkHsQwoabf_ZnUeIENqv0yGth7m9o8YFdyOSE88Lc_F1VAApWumWqeUYTV_CKlr3y3-Sf5TdTNTuwPWkLqhMaAoEmK1XiF0YA-6iJ_f4ZheXg9PNLaKoPyURBRMxU5OU-rknlsZorPAaEpIH_90ltcZkicb7l8tvw7oQja69WN5DFBrBC-gtuDraFyMPgrI4vhy0bmu28I1mDJOyWH_3sOAUjmWzIXEu3YPlIDBHunjzlnlOWxZtbB8Wx_J6dCBBTd6ds2i9dgHL63SssN_2OLQJ9VxxbVrwS7zAEI-ftS_1dXsDjjwi-ngJLLI7owOWSM01kVaB9R1sZB9jAFrYsErhFiqpdzR6k-mphtYF6oI0CBb92Wa29bckah-9KFAK_RRehygFy_b-bHNhBM_-vgOukPFt7ALB0sltqTVlqaNAE3Oq5mczbcJWhNU",
      user_data: "",
      advertisement_image_path: "",
    };
  },
  methods: {
    get_users_data: function() {
      axios
        .get("/api/user", {
          headers: {
            Authorization: "Bearer " + this.access_token,
            "Content-type": "application/json"
          }
        })
        .then(response => {
          this.user_data = response["data"];
          return this.user_data;
        })
        .catch(response => {
          console.log(response);
        });
    }
  },

  mounted() {
    if (this.auth) {
      this.user = this.auth.name;
    }

    this.get_users_data();
    console.log("Component mounted.");
    console.log(this.user);
    console.log(this.advertisements[0].post_images[0]);
  }
};
</script>
