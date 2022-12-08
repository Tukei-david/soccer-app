<template>
    <v-container>
        <v-card  width="500" class="mx-auto pt-10">
            <edit-player 
                :player="player"
                v-on:update-player="updatePlayer()"
            />
        </v-card>
    </v-container>
</template>


<script lang="ts">
import { defineComponent, onMounted } from 'vue'
import usePlayers from '../api/usePlayers'
import EditPlayer from '../components/EditPlayer.vue'
import { useRouter } from 'vue-router'

export default defineComponent({
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props) {

        const { player, fetchPlayer, patchPlayer } = usePlayers()
        const router = useRouter()

        const updatePlayer = async () => {
            await patchPlayer(props.id)
            router.push({ name: 'Home'})            
        }
        

        onMounted( () => {
            console.log(props.id)
            fetchPlayer(props.id)
        })


        return {
            player,
            updatePlayer
        }
    },
    components: {
        EditPlayer
    }
})
</script>
