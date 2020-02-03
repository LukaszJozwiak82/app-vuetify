<template>
    <v-container>
        <v-app>
            <v-form v-bind:action="'/advertisement/store/'" method="POST">
                <!-- <v-form> -->
                <v-container>
                    <v-row>
                        <v-col cols="12" sm="6" md="6">
                            <v-text-field
                                v-model="title"
                                name="title"
                                label="Nazwa ogłoszenia"
                                placeholder="Nazwa"
                                outlined
                            ></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="6" md="6">
                            <v-textarea
                                outlined
                                v-model="description"
                                name="description"
                                label="Opis"
                            ></v-textarea>
                        </v-col>
                        <v-col cols="12" sm="6" md="6">
                            <v-text-field
                                label="Cena"
                                placeholder="Cena"
                                outlined
                            ></v-text-field>
                        </v-col>
                    </v-row>
                    <div>
                        <el-upload
                            name="images[]"
                            action="/"
                            list-type="picture-card"
                            :limit="3"
                            :multiple="true"
                            :on-preview="handlePictureCardPreview"
                            :on-change="updateImageList"
                            :auto-upload="false"
                        >
                            <i class="el-icon-plus"></i>
                        </el-upload>
                    </div>
                    <div class="my-2">
                        <!-- <v-btn type="submit" color="warning" dark outlined @click="submit()">Zapisz</v-btn> -->
                        <v-btn
                            type="submit"
                            color="warning"
                            dark
                            outlined
                            @click="submit()"
                            >Zapisz</v-btn
                        >
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
    data: function() {
        return {
            dialogImageUrl: "",
            dialogVisible: false,
            imageList: [],
            title: "",
            description: "",
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
            let formData = new FormData();
            formData.append("title", this.title);
            formData.append("description", this.description);
            foreach(this.imageList, function(key, image) {
                formData.append(`images[${key}]`, image);
            });
        }
    },

    mounted() {}
};
</script>
