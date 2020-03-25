<template>
    <v-app>
        <v-navigation-drawer
            app
            class="success accent-4"
            :expand-on-hover="expandOnHover"
            :mini-variant="miniVariant"
            :right="false"
            absolute
            dark
        >
            <v-list dense nav class="py-0">
                <v-list-item two-line :class="miniVariant && 'px-0'">
                    <v-list-item-avatar>
                        <img
                            src="https://randomuser.me/api/portraits/men/81.jpg"
                        />
                    </v-list-item-avatar>

                    <v-list-item-content>
                        <v-list-item-title>Application</v-list-item-title>
                        <v-list-item-subtitle>Subtext</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>

                <v-divider></v-divider>

                <v-list-item v-for="item in items" :key="item.title" link>
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar color="success accent-4" height="50" app>
            <v-app-bar-nav-icon></v-app-bar-nav-icon>
            <v-toolbar-title>Admin</v-toolbar-title>
            <v-spacer></v-spacer>
        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-content>
            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                test text
            </v-container>
            {{ mi[0] }}
        </v-content>
    </v-app>
</template>

<script>
export default {
    props: ["mi"],
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
