import axios from 'axios'
import { ref } from 'vue'
import { PlayerItem } from '../type'

export default function usePlayers()
{
    const players = ref({})
    const player = ref({})

    const fetchPlayers = async (): Promise<void> =>
    {
        let response = await axios.get('/api/players')
        players.value = response.data.players
    }

    const fetchPlayer = async (id: string): Promise<void> =>
    {
        let response = await axios.get(`/api/players/${id}`)
        player.value = response.data.data
        
    }

    const patchPlayer = async (id: string): Promise<void> =>
    {
        await axios.patch(`/api/players/${id}/update`, player.value)
        
    }

    const createPlayer = async (): Promise<void> =>
    {
        await axios.post('/api/players/new')
    }

    const destroyPlayer = async (id: string): Promise<void> =>
    {
        await axios.delete(`/api/players/${id}/delete`)
    }

    return {
        players,
        fetchPlayers,
        player,
        fetchPlayer,
        patchPlayer,
        createPlayer,
        destroyPlayer
    }
}