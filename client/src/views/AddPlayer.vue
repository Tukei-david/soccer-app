<template>
    <v-container>
        <v-card  width="500" class="mx-auto pt-10">
            <new-player/>
        </v-card>
    </v-container>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import NewPlayer from '../components/NewPlayer.vue'

export default defineComponent({
  components: { NewPlayer },
    setup() {
        
    },
})
</script>
