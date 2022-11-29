<template>
    <h2>Threshold Awards</h2>
    <ul>
        <li v-for="award in awards">Week {{ award.week }}: {{ award.winning_team ?? 'None' }}</li>
    </ul>
</template>
<script>
export default {
    name: 'ThresholdAwards',
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
            axios.get('/api/threshold-awards')
                .then((res) => {
                    if (res.data.success !== false) {
                        this.awards = res.data.data;
                    }
                });
        },
    },
};
</script>
