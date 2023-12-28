<template>
    <div>
        <span
            :class="{
                'text-green': isProfitGreaterThanInitial(),
                'text-red': isProfitLessThanInitial(),
            }"
        >
            {{ currency }}{{ currentProfit.toFixed(2) }}
        </span>

        <button type="button" @click="handleClick">CLOSE TRADE</button>
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
            }, 5000);
        },
        updateProfit() {
            const randomChange = Math.random() * 200 - 100;
            let newProfit;

            if (this.changedCount % 5 < 3) {
                // Reduce the initial profit three times
                newProfit = this.initialProfit - Math.abs(randomChange);
            } else {
                // Increase the initial profit two times
                newProfit = this.initialProfit + Math.abs(randomChange);
            }

            this.changedProfits.unshift(newProfit);
            this.changedCount++;

            // Check if the sequence has completed (5 times) and reset counters
            if (this.changedCount === 5) {
                this.changedCount = 0;
                this.changedProfits = [];
            }

            this.currentProfit = newProfit;

            // Ensure profit is not negative
            // if (this.currentProfit < 0) {
            //     this.currentProfit = 0;
            // }
        },

        isProfitGreaterThanInitial() {
            return this.currentProfit > this.initialProfit;
        },
        isProfitLessThanInitial() {
            return this.currentProfit < this.initialProfit;
        },

        async handleClick() {
            const dataToSend = {
                trans_id: this.tnx_id,
                profit: this.currentProfit.toFixed(2),
            };

            try {
                const response = await axios.post(
                    "/user/close-tradeN",
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
    errorCaptured(err, vm, info) {
        console.error("Error captured:", err, vm, info);
        // Handle or log the error as needed
        return false; // Prevent the error from propagating further
    },
};
</script>

<style scoped>
.text-green {
    color: green;
}

.text-red {
    color: red;
}
</style>
