<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Storage;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // Récupération du contenu du fichier JSON
            $content = Storage::get('choices.json');
    
            // Conversion du contenu JSON en un tableau PHP
            $choices = json_decode($content, true);
    
            // Vérification s'il y a de nouveaux choix d'itinéraire
            foreach ($choices as $choice) {
                if ($choice['date'] > session('last_checked')) {
                    // Stockage du message dans la session
                    session()->flash('message', 'Nouvel itinéraire choisi par le client '.$choice['client'].'.');
    
                    // Mise à jour de la dernière vérification
                    session()->put('last_checked', $choice['date']);
                }
            }
        })->everyMinute();
    }
    

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
