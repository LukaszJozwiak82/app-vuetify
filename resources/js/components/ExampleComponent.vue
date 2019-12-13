<template>
<div class="container">
    <v-app>
        <div class="pb-4">
            <v-card class="pa-md-10 mx-auto pa-xs-1" width="344" height="250" outlined raised>
                <v-card-title>gfgfjgfkjf</v-card-title>
                {{test}}
            </v-card>
        </div>
        <v-alert type="success">
            I'm a success alert.
        </v-alert>
        <v-btn color="blue">Error</v-btn>
        <div class="my-2">
            <v-btn x-large color="success">Extra large Button</v-btn>
        </div>
        <div class="text-center">
            <v-badge>
                <template v-slot:badge>0</template>
                <v-icon>mdi-email</v-icon>
            </v-badge>
        </div>
    </v-app>
</div>
</template>

<script>
export default {
    props: ['test'],
    data: function () {
        return {
            test: this.test + 'aaaa'
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
