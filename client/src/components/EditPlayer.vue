<template>
  <v-container>
    <router-link
      :to="{ name: 'Home' }"
      class="px-2 py-4 text-uppercase text-decoration-none bg-blue-lighten-1 rounded-lg text-subtitle-2"
    >
      <v-icon size="samll" color="white-darken-2"> mdi-arrow-left </v-icon>
      Back
    </router-link>

    <v-form lazy-validation class="mt-7">
      <v-text-field
        v-model="player.name"
        label="Name"
        density="compact"
      ></v-text-field>

      <v-row>
        <v-col cols="12" md="6">
          <v-select
            v-model="player.club"
            label="Select Club"
            :items="[
              'Manchester United',
              'Bayern FC',
              'Barcelona Fc',
              'Real Madrid',
              'Machester City',
              'Juventus',
              'Arsenal',
              'Chelsea',
              'Borussia Dortmund',
              'Freiburg',
              'Rome',
            ]"
            density="compact"
          ></v-select>
        </v-col>
        <v-col cols="12" md="6">
          <v-select
            v-model="player.country"
            label="Select Country"
            :items="[
              'England',
              'Kenya',
              'Germany',
              'Senegal',
              'Nigeria',
              'South Africa',
              'Italy',
            ]"
            density="compact"
          ></v-select>
        </v-col>
      </v-row>

      <v-select
        v-model="player.position"
        label="Select Position"
        :items="[
          'GK',
          'LB',
          'LWB',
          'LCB',
          'RCB',
          'CB',
          'RWB',
          'RB',
          'CDM',
          'CM',
          'CAM',
          'LW',
          'ST',
          'RW',
        ]"
        density="compact"
      ></v-select>

      <v-btn
        block
        color="success"
        size="large"
        type="submit"
        variant="elevated"
        @click.prevent="$emit('update-player')"
        >Update</v-btn
      >
    </v-form>
  </v-container>
</template>

<script lang="ts">
import { defineComponent, onMounted } from "vue";
// import usePlayers from '../api/usePlayers'
// import router from '../routes'

export default defineComponent({
  props: ["player"],
  setup(props) {
    // const { patchPlayer } = usePlayers()
    // const updatePlayer = async () => {
    //     console.log('Working!');
    //     await patchPlayer(props.player.id)
    //     router.push({ name: 'Home'})
    // }
    // onMounted( () => {
    //     console.log(props.player);
    // })
    // return {
    //     updatePlayer
    // }
  },
});
</script>
