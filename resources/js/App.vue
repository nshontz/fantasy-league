<template>
    <div class="grid grid-cols-12">

        <div class="col-span-6">
            <Schedule></Schedule>
        </div>
        <div class="col-span-2">
            <ThresholdAwards></ThresholdAwards>
        </div>
    </div>
    <div class="grid grid-cols-12">

        <div class="col-span-12">
            <ManagerStatistics></ManagerStatistics>
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <Awards></Awards>
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <WeeklyStatistics></WeeklyStatistics>
        </div>
    </div>

</template>
<script>
import TeamList from "./components/TeamList.vue";
import Schedule from "./components/Schedule.vue";
import Awards from "./components/Awards.vue";
import ThresholdAwards from "./components/ThresholdAwards.vue";
import ManagerStatistics from "./components/ManagerStatistics.vue";
import WeeklyStatistics from "./components/WeeklyStatistics.vue";

export default {
    components: {Awards, Schedule, TeamList, ThresholdAwards, ManagerStatistics, WeeklyStatistics}
}
</script>
