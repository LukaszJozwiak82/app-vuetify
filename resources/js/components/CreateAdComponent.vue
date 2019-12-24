<template>
<v-container>
    <v-app>
        <v-form v-bind:action="'/advertisement/store/'" method="POST">
        <!-- <v-form> -->
            <v-container>
                <v-row>
                    <v-col cols="12" sm="6" md="6">
                        <v-text-field v-model="title" :name="'name'" label="Nazwa ogłoszenia" placeholder="Nazwa" outlined></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="6">
                        <v-textarea outlined name="input-7-4" label="Opis" value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."></v-textarea>
                    </v-col>
                    <v-col cols="12" sm="6" md="6">
                        <v-text-field label="Cena" placeholder="Cena" outlined></v-text-field>
                    </v-col>
                </v-row>
                <div>
                    <el-upload name="images[]" action="/" list-type="picture-card" :limit="3" :multiple="true" :on-preview="handlePictureCardPreview" :on-change="updateImageList" :auto-upload="false">
                        <i class="el-icon-plus"></i>
                    </el-upload>
                </div>
                <div class="my-2">
                    <!-- <v-btn type="submit" color="warning" dark outlined @click="submit()">Zapisz</v-btn> -->
                    <v-btn type="submit" color="warning" dark outlined @click="submit()">Zapisz</v-btn>
                </div>
                <input type="hidden" name="_token" :value="csrf" />
            </v-container>
        </v-form>
        <footer-component />
    </v-app>
</v-container>
</template>

<script>
export default {
    props: [],
    data: function () {
        return {
            dialogImageUrl: '',
            dialogVisible: false,
            imageList: [],
            title: '',
            csrf: window.Laravel.csrfToken
        };
    },
    methods: {
        updateImageList(file) {
            this.imageList.push(file.raw);
            // console.log(file.raw);
        },
        handlePictureCardPreview(file) {
            this.dialogImageUrl = file.url;
            this.dialogVisible = true;
        },
        submit() {
            console.log("123");
            let formData = new FormData();
            formData.append('title',this.title);
            $.each(this.imageList, function(key, image){
                formData.append(`images[${key}]`, image);
            });
            console.log(formData.get('title'));
            console.log(formData.get('images[0]'));
            console.log(formData.get('images[1]'));
        }
    },

    mounted() {

    }
};
</script>
