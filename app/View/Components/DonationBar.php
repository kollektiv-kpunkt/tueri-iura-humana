<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DonationBar extends Component
{
    public $donations;
    public $total;
    public $donationCount;
    public $goal;
    public $percentage;
    /**
     * Create a new component instance.
     */
    public function __construct($goal = 5000)
    {
        $client = new \GuzzleHttp\Client(["base_uri" => "https://api.raisenow.com/epayment/api/jusok-5966/transactions/search"]);
        $response = $client->request("GET", "search", [
            "curl" => [
                CURLOPT_USERPWD => env("RNW_USER") . ":" . env("RNW_PASSWORD"),
            ],
            "query" => [
                "sort[0][field_name]" => "created",
                "sort[0][order]" => "desc",
                "filters[0][field_name]" => "stored_campaign_name",
                "filters[0][type]" => "fulltext",
                "filters[0][value]" => "aci_buendnis",
                "filters[1][field_name]" => "last_status",
                "filters[1][type]" => "term",
                "filters[1][value]" => "final_success"
            ]
        ]);
        $this->donations = json_decode($response->getBody()->getContents())->result->transactions;
        $amount = 0;
        $this->donationCount = count($this->donations) + 1;
        foreach ($this->donations as $donation) {
            $amount += $donation->amount;
        }
        $this->total = round(($amount / 100) + env("DEFAULT_DONATION", 131.2), 2);
        $this->goal = $goal;
        $this->percentage = round($this->total / $this->goal * 100, 2);
}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.donation-bar');
    }
}
