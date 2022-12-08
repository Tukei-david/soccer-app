<template>
    <v-container>
        <v-card class="px-4 py-4 mt-7">
            <router-link 
                :to="{ name: 'AddPlayer'}"
                class="px-2 py-4 text-uppercase text-decoration-none bg-blue-lighten-1 rounded-lg text-subtitle-2"
            >
                <v-icon
                    size="samll"
                    color="white-darken-2"
                >
                    mdi-account-edit
                </v-icon>
                Add new Player
            </router-link>
        </v-card>
        <v-table fixed-header>
            <thead>
                <tr>
                <th class="text-left">
                    Name
                </th>
                <th class="text-left">
                    Club
                </th>
                <th class="text-left">
                    Country
                </th>
                <th class="text-left">
                    Position
                </th>
                <th class="text-left">
                    Actions
                </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="player in players"
                    :key="player.id"
                >
                    <td> {{ player.name }}</td>
                    <td>{{ player.club }}</td>
                    <td>{{ player.country }}</td>
                    <td>{{ player.position}}</td>
                    <td>
                        <v-icon
                            size="large"
                            color="red-darken-2"
                            @click="deletePlayer(player.id)"
                        >
                            mdi-delete
                        </v-icon>
                        <router-link :to="{ name: 'EditPlayer', params: { id: player.id }}" class="text-decoration-none">
                            <v-icon
                                size="large"
                                color="green-darken-2"
                                >
                                mdi-arrow-split-vertical
                            </v-icon>
                        </router-link>
                    </td>
                </tr>
            </tbody>
        </v-table>
    </v-container>
  </template>

  <script lang="ts">
  import { defineComponent, onMounted, ref } from 'vue'
  import usePlayers from '../api/usePlayers';
import { PlayerItem } from '../type';
  
  export default defineComponent({
    setup() {
        
        const { players, fetchPlayers, destroyPlayer } = usePlayers()

        const deletePlayer = async (id: string) => {
            await destroyPlayer(id)
            await fetchPlayers()
        }

        onMounted( () => {
            fetchPlayers()
        })


        return {
            players,
            deletePlayer
        }
    },
  })
  </script>
  