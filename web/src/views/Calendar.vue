<template>
  <div class="w-full flex bg-gray-light">
    <div class="flex flex-col w-full">
      <HeaderTable></HeaderTable>
      <div
        class="flex bg-white h-full items-center justify-center mx-3 mb-3 rounded-md shadow-headerTable"
      >
        <vue-cal
          :events="events"
          :timeCellHeight="31"
          :time-from="7 * 60"
          :time-to="15 * 60"
          :time-step="30"
          hide-weekends
          active-view="week"
          :disable-views="['years']"
          class="font-customFont"
        />
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
  data: () => ({
    events: [
      {
        start: "2021-4-15 11:00",
        end: "2021-4-15 11:30",
        title: "Sestanek",
        content: '<i>Sestanek</i>',
        class: "mark",
      },
    ],
  }),
};
</script>

<style>
.vuecal__menu,
.vuecal__cell-events-count {
  background-color: #032a4e;
  color: white;
}
.vuecal__title-bar {
  background-color: #03779e;
  color: white;
}
.vuecal__cell--today,
.vuecal__cell--current {
  background-color: rgba(198, 198, 218, 0.4);
}
.vuecal:not(.vuecal--day-view) .vuecal__cell--selected {
  background-color: rgba(211, 218, 243, 0.4);
}
.vuecal__cell--selected:before {
  border-color: #03779e;
}
.vuecal__cell--highlighted:not(.vuecal__cell--has-splits),
.vuecal__cell-split--highlighted {
  background-color: #03779e;
}
.vuecal__arrow.vuecal__arrow--highlighted,
.vuecal__view-btn.vuecal__view-btn--highlighted {
  background-color: #03779e;
}

.vuecal__event.mark {
  background-color: #03779e;
  border: 1px solid #032a4e;
  color: #fff;
}
</style>