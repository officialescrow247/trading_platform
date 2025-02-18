<?php

namespace Database\Seeders;

use App\Models\Crypto;
use GuzzleHttp\Client;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AssetTableSeeder extends Seeder
{
    public function run()
    {
        $client = new Client();
        $response = $client->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        $data = json_decode($response->getBody());
        
        foreach($data as $crypto){
            // if($crypto->symbol == 'btc'){
            //     return $crypto->current_price;
            // }
            Crypto::create([
                'symbol' => $crypto->symbol,
                'name' => $crypto->name,
                'image' => $crypto->image,
                'current_price' => $crypto->current_price,
                'market_cap' => $crypto->market_cap,
                'market_cap_rank' => $crypto->market_cap_rank,
                'fully_diluted_valuation' => $crypto->fully_diluted_valuation,
                'total_volume' => $crypto->total_volume,
                'high_24h' => $crypto->high_24h,
                'low_24h' => $crypto->low_24h,
                'price_change_24h' => $crypto->price_change_24h,
                'price_change_percentage_24h' => $crypto->price_change_percentage_24h,
                'market_cap_change_24h' => $crypto->market_cap_change_24h,
                'market_cap_change_percentage_24h' => $crypto->market_cap_change_percentage_24h,
                'circulating_supply' => $crypto->circulating_supply,
                'total_supply' => $crypto->total_supply,
                'max_supply' => $crypto->max_supply,
                'ath' => $crypto->ath,
                'ath_change_percentage' => $crypto->ath_change_percentage,
                'ath_date' => $crypto->ath_date,
                'atl' => $crypto->atl,
                'atl_change_percentage' => $crypto->atl_change_percentage,
                'atl_date' => $crypto->atl_date,
                // 'roi' => $crypto->roi,
                // 'last_updated' => $crypto->last_updated,
            ]);
        }

        // update BTC wallet
        $settings = [
            [
                'name' => 'btc_wallet_address',
                'value' => 'bc1qyccpyu5j3mju440tflaj3za5f5vx6yz032s6zc',
            ],
            [
                'name' => 'support_email',
                'value' => 'support@tradenation-uk.com',
            ],
            [
                'name' => 'online_users',
                'value' => '20',
            ],
        ];
        foreach ($settings as $setting) {
            Setting::create($setting);
        }

    }
}
