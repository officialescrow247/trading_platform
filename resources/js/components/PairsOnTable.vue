<template>
    <div class="table-container">
        <table class="table text-center">
            <thead>
                <tr>
                <th class="py-3" scope="col" style="border-top-left-radius: 10px;">Market <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col">Bid <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col">Ask <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col">Spread <i class="fa fa-circle-info"></i></th>
                <th class="py-3" scope="col" style="border-top-right-radius: 10px;">Trend <i class="fa fa-circle-info"></i></th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(pair, index) in marketData" :key="index" :class="index % 2 === 0 ? 'tB_c' : 'tB_c2'">
                    <th class="py-3" scope="row">{{ pair.market }}</th>
                    <td class="py-3">
                        <button class="btn rounded-pill btn-color px-4"><b>SELL {{ pair.bid }}</b></button>
                    </td>
                    <td class="py-3">
                        <button class="btn rounded-pill btn-color px-4"><b>BUY {{ pair.ask }}</b></button>
                    </td>
                    <td class="py-3">{{ pair.spread }}</td>
                    <td class="py-3"><img :src="pair.trend" alt="" class="img-fluid wid_o"></td>
                    <!-- <td class="py-3">{{ pair.trend }}</td> -->
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                marketData: [
                    { "market": "AUD/USD", "bid": "0.67045", "ask": "0.67049", "spread": "0.4", "trend": "https://tradenation.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fredeline-one.77e875c5.png&w=16&q=75" },
                    { "market": "EUR/USD", "bid": "1.10752", "ask": "1.10755", "spread": "0.3", "trend": "https://tradenation.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fgreenline-two.a614283d.png&w=16&q=75" },
                    { "market": "GBP/USD", "bid": "1.31236", "ask": "1.31243", "spread": "0.7", "trend": "https://tradenation.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fgreenline-five.98045811.png&w=16&q=75" },
                    { "market": "USD/CAD", "bid": "1.35871", "ask": "1.35878", "spread": "0.7", "trend": "https://tradenation.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fgreenline-four.3c669381.png&w=16&q=75" },
                    { "market": "USD/JPY", "bid": "140.821", "ask": "140.826", "spread": "0.5", "trend": "https://tradenation.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fredline-five.b4c1c555.png&w=16&q=75" },
                ]
                , // To hold API data
            };
        },
        mounted() {
            this.fetchMarketData();

            // Set interval to fetch real-time updates every 10 seconds (adjust as needed)
            setInterval(() => {
                this.fetchMarketData();
            }, 10000);
        },
        methods: {
            async fetchMarketData() {
                try {
                    const response = await fetch('https://api.example.com/market-data'); // Replace with your API endpoint
                    const data = await response.json();
                    this.marketData = data;
                } catch (error) {
                    console.error('Error fetching market data:', error);
                }
            },
        },
    };
</script>

<style scoped>
    .wid_o{
        width: 200px !important;
    }
    .btn-color{
        background-color: #D1D1D1;
        color: #050f19;
    }

    .tB_c td, .tB_c th{
        background-color: #0b1e33;
        color: #fff;
        border-top: 2px solid #050f19;
        border-bottom: 2px solid #050f19;
    }

    .tB_c2 td, .tB_c2 th{
        background-color: #121c25;
        color: #fff;
        border-top: 2px solid #050f19;
        border-bottom: 2px solid #050f19;
    }    
</style>
