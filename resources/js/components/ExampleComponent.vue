<template>
<div class="container">
    <v-app>
        <div class="pb-4">
            <v-card class="pa-md-10 mx-auto pa-xs-1" width="344" height="250" outlined raised>
                <v-card-title>Karta</v-card-title>
                {{test2}}
                {{user}}
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
                <template v-slot:badge>2</template>
                <v-icon>mdi-email</v-icon>
            </v-badge>
        </div>
        <v-simple-table dark>
            <template v-slot:default>
                <thead>
                    <tr>
                        <th class="text-left">ID</th>
                        <th class="text-left">Name</th>
                        <th class="text-left">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in user_data" :key="item.name">
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.email }}</td>
                    </tr>
                </tbody>
            </template>
        </v-simple-table>
    </v-app>
</div>
</template>

<script>
export default {
    props: ['test', 'auth'],
    data: function () {
        return {
            test2: this.test + 'aaaa',
            user: this.auth.name,
            access_token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYWY0MjViM2RlNjczMDU2NTI5MDg2NjJkMmE0YWU3ZGQ1NzBhNTU1MjFiNWIxZjg5Mjg0MWRhZGRkMWYwNWMzZjAwNWU4Mjg4YWY3OTNjOTAiLCJpYXQiOjE1NzY1NzQ0ODMsIm5iZiI6MTU3NjU3NDQ4MywiZXhwIjoxNjA4MTk2ODgzLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.o_9PaG9GbI-5Fs8l2gpXBlrAho2JxPlwvLmGG7gSId5SrBP428DXJfSqHodlZJwlkPOJ_JNg-jRtb8G8KqGJSy7Xkx9TeJySJqWZhwpH5ZI34tQqxjhbSk8h16J25mYn4ZRybPgQ8ES0-igSemS9OuTK9gpUrNwpDB44ER2T5iT57uAneguHAP5P_gd9RMvtvAysizKCkSRjg0hMiMmMtafw6iUJMAdSNlJwaBZciuuirZrpOkHsQwoabf_ZnUeIENqv0yGth7m9o8YFdyOSE88Lc_F1VAApWumWqeUYTV_CKlr3y3-Sf5TdTNTuwPWkLqhMaAoEmK1XiF0YA-6iJ_f4ZheXg9PNLaKoPyURBRMxU5OU-rknlsZorPAaEpIH_90ltcZkicb7l8tvw7oQja69WN5DFBrBC-gtuDraFyMPgrI4vhy0bmu28I1mDJOyWH_3sOAUjmWzIXEu3YPlIDBHunjzlnlOWxZtbB8Wx_J6dCBBTd6ds2i9dgHL63SssN_2OLQJ9VxxbVrwS7zAEI-ftS_1dXsDjjwi-ngJLLI7owOWSM01kVaB9R1sZB9jAFrYsErhFiqpdzR6k-mphtYF6oI0CBb92Wa29bckah-9KFAK_RRehygFy_b-bHNhBM_-vgOukPFt7ALB0sltqTVlqaNAE3Oq5mczbcJWhNU',
            user_data: ''
        }
    },
    methods: {
        get_users_data: function () {
            axios.get('/api/user', {
                    headers: {
                        Authorization: 'Bearer ' + this.access_token
                    }
                })
                .then(response => {
                    this.user_data = response['data'];
                    return this.user_data;
                })
                .catch(response => {
                    console.log(response)
                });
        }
    },

    mounted() {
        this.get_users_data();
        console.log('Component mounted.')
        console.log(this.user)
    }
}
</script>
