<template>
    <div>
        <span
            :class="{
                'text-green': isProfitGreaterThanInitial(),
                'text-red': isProfitLessThanInitial(),
            }"
        >
            <b>{{ getFormattedProfit }}</b>
        </span>

        <br />

        <button
            v-if="can_you_close == 1"
            type="button"
            @click="handleClick"
            class="btn btn-secondary btn-sm px-4"
            :class="{
                'btn-success': isProfitGreaterThanInitial(),
                'btn-danger': isProfitLessThanInitial(),
            }"
        >
            CLOSE TRADE
        </button>
    </div>
</template>

<script>
import axios from "axios";
export default {
    props: {
        currency: {
            type: String,
            default: "$",
        },
        test_profit: Number,
        tnx_id: Number,
        can_you_close: Number,
        select_user: String,
    },
    data() {
        return {
            initialProfit: this.test_profit,
            currentProfit: this.test_profit,
            changedProfits: [],
            changedCount: 0,
        };
    },
    mounted() {
        this.scheduleUpdate();
    },
    methods: {
        scheduleUpdate() {
            setTimeout(() => {
                this.updateProfit();
                this.scheduleUpdate();
            }, 2500);
        },
        updateProfit() {
            const randomChange = Math.random() * 200 - 100;

            // Use the default behavior (reduce three times, increase two times)
            if (this.changedCount % 5 < 3) {
                // Reduce the profit (but not below 15% of the initial profit)
                this.currentProfit = Math.max(
                    this.initialProfit * 0.15,
                    this.currentProfit - Math.abs(randomChange)
                );
            } else {
                // Increase the profit (but not above 15% of the initial profit)
                this.currentProfit = Math.min(
                    this.initialProfit * 1.15,
                    this.currentProfit + Math.abs(randomChange)
                );
            }

            this.changedProfits.unshift(this.currentProfit);
            this.changedCount++;

            // Check if the sequence has completed (5 times) and reset counters
            if (this.changedCount === 5) {
                this.changedCount = 0;
                this.changedProfits = [];
            }
        },

        isProfitGreaterThanInitial() {
            return this.currentProfit > this.initialProfit;
        },
        isProfitLessThanInitial() {
            return this.currentProfit < this.initialProfit;
        },

        async handleClick() {
            try {
                const dataToSend = {
                    trans_id: this.tnx_id,
                    profit: this.getFormattedProfit,
                };

                const response = await axios.post(
                    this.select_user + "close-tradeN",
                    dataToSend
                );

                if (response.data) {
                    // swal({
                    //     title: "Successful!",
                    //     text: "",
                    //     icon: "success",
                    // });

                    // Delay the page reload for 5 seconds (5000 milliseconds)
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            } catch (error) {
                console.error("Error:", error);
            }
        },
    },
    computed: {
        getFormattedProfit() {
            const formattedProfit = Math.abs(this.currentProfit).toFixed(2);
            const sign = this.currentProfit >= this.initialProfit ? "+" : "-";
            return `${sign} ${this.currency}${formattedProfit}`;
        },
    },

    errorCaptured(err, vm, info) {
        console.error("Error captured:", err, vm, info);
        // Handle or log the error as needed
        return false; // Prevent the error from propagating further
    },
};
</script>

<style scoped>
.text-green {
    /* color: #04ff04; */
    color: #82d617;
}

.text-red {
    color: #fd3041;
}
</style>
