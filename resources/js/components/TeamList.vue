<template>
    <h2>Team List</h2>
    <ul>
        <li v-for="team in teams">{{ team.name }}</li>
    </ul>
</template>
<script>
export default {
    name: 'TeamList',
    components: {},
    props: {},
    data() {
        return {
            teams: null
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('/api/teams')
                .then((res) => {
                    if (res.data.success !== false) {
                        this.teams = res.data.data;
                    }
                });
        },
    },
};
</script>
