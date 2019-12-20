<template>
  <v-footer>
    <v-spacer></v-spacer>
    <div>&copy; {{ new Date().getFullYear() }} {{msg}}</div>
  </v-footer>
</template>
<script>
export default {
  props: ['msg'],
  data: function() {
    return {
      
    };
  },
  methods: {
    
  },

  mounted() {
    
    console.log("Component mounted.");
  } 
};
</script>
