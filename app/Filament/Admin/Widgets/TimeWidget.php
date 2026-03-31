<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class TimeWidget extends Widget
{
    protected string $view = 'filament.widgets.time-widget';

    protected static ?int $sort = -2;

    protected int|string|array $columnSpan = 1;

    protected static ?string $pollingInterval = 'null';

    public string $time = '';
    public string $seconds = '';
    public string $date = '';
    public string $timezone = '';

    public function mount(): void
    {
        $this->fetchTime();
    }

    public function fetchTime(): void
    {
        try {
            $response = Http::timeout(5)->get('https://worldtimeapi.org/api/timezone/Asia/Jakarta');

            if ($response->successful()) {
                $data = $response->json();
                $datetime = Carbon::parse($data['datetime'])
                    ->setTimezone('Asia/Jakarta')
                    ->locale('id');

                $this->time = $datetime->format('H:i');
                $this->seconds = $datetime->format('s');
                $this->date = $datetime->translatedFormat('l, d F Y');
                $this->timezone = $data['timezone'];
            }
        } catch (\Exception $e) {
            $datetime = now()->setTimezone('Asia/Jakarta')->locale('id');

            $this->time = $datetime->format('H:i');
            $this->seconds = $datetime->format('s');
            $this->date = $datetime->translatedFormat('l, d F Y');
            $this->timezone = 'Asia/Jakarta';
        }
    }
}