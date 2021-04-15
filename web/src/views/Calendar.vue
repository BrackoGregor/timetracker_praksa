<template>
  <div class="w-full flex bg-gray-light">
    <div class="flex flex-col w-full">
      <HeaderTable></HeaderTable>
      <div
        class="flex bg-white h-full items-center justify-center mx-3 mb-3 rounded-md shadow-headerTable"
      >
        <vue-cal :time="false" hide-weekends active-view="week" :disable-views="['years']" class="font-customFont"/>
      </div>
    </div>
  </div>
</template>

<script>
import HeaderTable from "../components/HeaderTable";
import VueCal from "vue-cal";
import "vue-cal/dist/vuecal.css";

export default {
  components: {
    HeaderTable,
    VueCal,
  },
};
</script>

<style>
.vuecal__menu, .vuecal__cell-events-count {background-color: #032A4E;color: white;}
.vuecal__title-bar {background-color: #03779E; color:white}
.vuecal__cell--today, .vuecal__cell--current {background-color: rgba(198, 198, 218, 0.4);}
.vuecal:not(.vuecal--day-view) .vuecal__cell--selected {background-color: rgba(211, 218, 243, 0.4);}
.vuecal__cell--selected:before {border-color: #03779E;}
.vuecal__cell--highlighted:not(.vuecal__cell--has-splits),
.vuecal__cell-split--highlighted {background-color:#03779E}
.vuecal__arrow.vuecal__arrow--highlighted,
.vuecal__view-btn.vuecal__view-btn--highlighted {background-color:#03779E;}

</style>