<template>
    <v-app-bar color="success accent-4" height="50" app>
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
        <v-toolbar-title>Admin 2222</v-toolbar-title>
        <v-spacer></v-spacer>
    </v-app-bar>
</template>

<script>
export default {
    props: [],
    data() {
        return {
            drawer: true,
            items: [
                { title: "Dashboard", icon: "mdi-view-dashboard" },
                { title: "Photos", icon: "mdi-image" },
                { title: "About", icon: "mdi-help-box" }
            ],
            color: "success",
            colors: ["primary", "blue", "success", "red", "teal"],
            right: true,
            miniVariant: false,
            expandOnHover: false,
            background: false
        };
    },
    computed: {
        bg() {
            return this.background
                ? "https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg"
                : undefined;
        }
    }
};
</script>
