<template>
<v-container>
    <v-app>
        <v-form>
            <v-container>
                <v-row>
                    <v-col cols="12" sm="6" md="6">
                        <v-text-field label="Nazwa ogłoszenia" placeholder="Nazwa" outlined></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="6">
                        <v-textarea outlined name="input-7-4" label="Opis" value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."></v-textarea>
                    </v-col>
                    <v-col cols="12" sm="6" md="6">
                        <v-text-field label="Cena" placeholder="Cena" outlined></v-text-field>
                    </v-col>
                    <div>
                        <el-upload  action="/" list-type="picture-card"
                        :on-preview="handlePictureCardPreview"
                        :on-change="updateImageList"
                        :auto-upload="false"
                        >
                        <i class="el-icon-plus"></i>
                        </el-upload>
                    </div>
                </v-row>
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
        };
    },
    methods: {
        updateImageList(file){
            this.imageList.push(file.raw);
            console.log(file.raw    );
        },
        handlePictureCardPreview(file){
            this.dialogImageUrl = file.url;
            this.dialogVisible = true;
        }
    },

    mounted() {

    }
};
</script>
