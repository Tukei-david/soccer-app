<template>
  <v-app>
    <Nav/>
    <router-view/>
  </v-app>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import Nav from './components/Nav.vue';

export default defineComponent({
  components: { Nav },
  setup() {
    
  },
})
</script>
