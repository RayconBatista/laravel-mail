<?php

namespace App\Console\Commands;

use App\Mail\UserRegistered;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enviaremail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send(new UserRegistered('Raycon', 'rayconbentes16@gmail.com', 'Você tem permissão para excluir o usuário Fulano de Tal?', 'documents/TutorialPDF.pdf'));
    }
}
