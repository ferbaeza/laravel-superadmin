<?php

namespace Baezeta\Admin\Shared\Laravel\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Baezeta\Admin\Shared\Exceptions\ValueObjects\EmailInvalidoException;
use Baezeta\Admin\Admin\Usuarios\Application\RegistrarSuperAdminUsuarioCommand;
use Baezeta\Admin\Admin\Usuarios\Application\RegistrarSuperAdminUsuarioCommandHandler;

#[AsCommand(name: 'admin:create-super-admin')]
class SuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create-super-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to start the super admin creation process.';
    protected string $emailAllowed = 'baezeta@gmail.com';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->warn('Creacion de SuperAdmin Usuario');
        $email = $this->components->ask('Introduce your email?', $this->emailAllowed);
        // $this->components->confirm('Confirma con el email introducido : '.$email , true);
        // $this->output->horizontalTable(['email'], [[$email]]);
        
        // $this->output->writeln('Introduce y confirma tu contraseña');

        $password = $this->components->secret(' Introduce tu Password:');
        // $passConfirmation = $this->secret('Confirm tu Password:');
        
        // if ($password !== $passConfirmation) {
            //     $errorMessage = 'The passwords do not match';
            //     $this->output->error($errorMessage);
            //     return Command::FAILURE;
            // }
            
        // $this->output->progressStart(100);
        $this->line('');
        $this->components->confirm('Estas seguro de crear un usuario super admin?', true);
        $this->line('');

        if(!$this->verificarEmail($email)){
            $this->output->error('El email introducido no es valido');
            return Command::FAILURE;
        }

        if (!$this->verificarPassword($password)) {
            $this->output->error('El password introducido no es valido');
            return Command::FAILURE;
        }

        if($this->registrarUsuario($email, $password)){
            $this->components->task('El email ' . $email . ' introducido es correcto.');
            $finalMessage = 'El Usuario SuperAdmin ' . $email . ' has been created successfully';
            // $this->output->progressFinish();
            $this->output->success($finalMessage);
            return Command::SUCCESS;
        }
        return Command::FAILURE;
        
    }

    private function registrarUsuario(string $email, string $password)
    {
        try {
            $command = new RegistrarSuperAdminUsuarioCommand($email, $password);
            return app()->make(RegistrarSuperAdminUsuarioCommandHandler::class)->run($command);
        } catch (\Throwable $th) {
            $this->output->error($th->getMessage());
            return false;
        }
    }



    private function verificarEmail(string $email)
    {
        return isValidEmail($email);
    }
    
    private function verificarPassword(string $password)
    {
        return isValidPassword($password);
    }
}
