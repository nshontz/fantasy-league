<template>
    <h2>Manager Statistics</h2>

    <table class="table-auto">
        <thead>
        <tr>
            <th>Team</th>
            <th>Season Projections</th>
            <th>Season Points</th>
            <th>Total Performance Margin</th>
            <th>Played Performance Margin</th>
            <th>Total Left on Bench</th>
            <th>Management Score</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="team in stats">
            <td>{{ team.team }}</td>
            <td>{{ team.season_projections }}</td>
            <td>{{ team.season_points }}</td>
            <td>{{ team.total_performance_margin }}</td>
            <td>{{ team.played_performance_margin }}</td>
            <td>{{ team.total_left_on_bench }}</td>
            <td>{{ team.management_score }}</td>
        </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    name: 'ManagerStatistics',
    components: {},
    props: {},
    data() {
        return {
            stats: null
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('/api/manager-statistics')
                .then((res) => {
                    if (res.data.success !== false) {
                        this.stats = res.data.data;
                    }
                });
        },
    },
};
</script>
