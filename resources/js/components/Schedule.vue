<template>
    <h2>Schedule</h2>
    <a href="/scores/input" class="btn btn-info">Upload Scores</a>
    <a href="/shedule/input">Upload Schedule</a>
    <div style="height: 400px; overflow:auto">
        <table class="table-auto">
            <thead>
            <tr>
                <th scope="col" class="text-left">Week</th>
                <th scope="col" class="text-left">Away Team</th>
                <th scope="col" class="text-right">Away</th>
                <th scope="col" class="text-right">Home</th>
                <th scope="col" class="text-left">Home Team</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="game in schedule">
                <th scope="row">{{ game.week }}</th>
                <td>{{ game.away_team }}</td>
                <td class="text-right">{{ game.away_score }}</td>
                <td class="text-right">{{ game.home_score }}</td>
                <td>{{ game.home_team }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: 'Schedule',
    components: {},
    props: {},
    data() {
        return {
            schedule: null
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('/api/schedule')
                .then((res) => {
                    if (res.data.success !== false) {
                        this.schedule = res.data.data;
                    }
                });
        },
    },
};
</script>
