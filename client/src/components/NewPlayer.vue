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
          v-model="form.name"
          label="Name"
          density="compact"
          required
        ></v-text-field>

        <v-row>
          <v-col cols="12" md="6">
            <v-select
              v-model="form.club"
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
              required
            ></v-select>
          </v-col>
          <v-col cols="12" md="6">
            <v-select
              v-model="form.country"
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
          v-model="form.position"
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
          @click.prevent="newPlayer"
          >Add Player</v-btn
        >
    </v-form>
  </v-container>
</template>

<script lang="ts">
import { defineComponent, reactive, ref } from "vue";
import usePlayers from "../api/usePlayers";
import axios from "axios";
import { useRouter } from "vue-router";

export default defineComponent({
  setup() {
    // Using ref to store the data
    const form = reactive({
      name: "",
      club: "",
      country: "",
      position: "",
    });

    const errors = ref({});

    const route = useRouter();

    const newPlayer = async () => {
      await axios
        .post("/api/players/new", form)
        .then((response) => {
          route.push({ name: "Home" });
        })
        .catch((e) => {
          if (e.response.status === 422) {
            errors.value = e.response.data.errors;
          }
        });
    };

    return {
      form,
      newPlayer,
      errors,
    };
  },
});
</script>
