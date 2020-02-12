<template>
    <v-container>
        <v-app>
            {{ adv.id }}

            <v-card max-width="1000" class="mx-auto mb-6">
                <v-img
                    :src="
                        '/storage' + adv.post_images[0].advertisement_image_path
                    "
                    alt="ccccc"
                    title="ccc"
                    width="auto"
                    height="200"
                    dark
                >
                    <v-row class="fill-height">
                        <v-card-title class="white--text pl-12 pt-12">
                            <div class="display-1 pl-12 pt-12">
                                {{ adv.title }}
                            </div>
                        </v-card-title>
                    </v-row>
                </v-img>

                <v-list two-line>
                    <v-list-item @click="">
                        <v-list-item-icon>
                            <v-icon color="indigo">mdi-map-marker</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title
                                >Cena: {{ adv.price }} PLN</v-list-item-title
                            >
                            <v-list-item-subtitle
                                >Orlando, FL 79938</v-list-item-subtitle
                            >
                        </v-list-item-content>
                    </v-list-item>

                    <v-divider inset></v-divider>

                    <v-list-item @click="">
                        <v-list-item-icon>
                            <v-icon color="indigo">mdi-phone</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title
                                >(650) 555-1234</v-list-item-title
                            >
                            <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                        </v-list-item-content>

                        <!-- <v-list-item-icon>
                            <v-icon>mdi-message-text</v-icon>
                        </v-list-item-icon> -->
                    </v-list-item>

                    <v-divider inset></v-divider>

                    <v-list-item @click="">
                        <v-list-item-icon>
                            <v-icon color="indigo">mdi-email</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title
                                >aliconnors@example.com</v-list-item-title
                            >
                            <v-list-item-subtitle
                                >Personal</v-list-item-subtitle
                            >
                        </v-list-item-content>
                    </v-list-item>

                    <v-divider inset></v-divider>

                    <v-list-item @click="">
                        <v-list-item-icon>
                            <v-icon color="indigo">mdi-map-marker</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title>{{
                                adv.description
                            }}</v-list-item-title>
                            <v-list-item-subtitle
                                >Orlando, FL 79938</v-list-item-subtitle
                            >
                        </v-list-item-content>
                    </v-list-item>
                    <v-container fluid>
                        <v-row>
                            <v-col
                                cols="6"
                                sm="4"
                                v-for="img in adv.post_images"
                                v-bind:key="img.id"
                            >
                                <v-img
                                    :src="
                                        '/storage' +
                                            img.advertisement_image_path
                                    "
                                />
                            </v-col>
                        </v-row>
                    </v-container>
                </v-list>
            </v-card>

            <footer-component :msg="message" />
        </v-app>
    </v-container>
</template>
<script>
export default {
    props: ["adv"],
    data: function() {
        return {};
    },
    methods: {},
    mounted() {
        console.log(this.adv);
    }
};
</script>
