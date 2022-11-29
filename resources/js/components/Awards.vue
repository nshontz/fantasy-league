<template>
    <h2>Awards</h2>
    <table class="table-auto">
        <thead>
        <tr>
            <th>Award</th>
            <th>Team</th>
            <th>Context</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="award in awards">
            <td>
                <strong>{{ award.award }}</strong>
                <br/>
                {{ award.description }}</td>
            <td>{{ award.team }}</td>
            <td>{{ award.context }}</td>
        </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    name: 'Awards',
    components: {},
    props: {},
    data() {
        return {
            awards: null
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('/api/awards')
                .then((res) => {
                    if (res.data.success !== false) {
                        this.awards = res.data.data;
                    }
                });
        },
    },
};
</script>
