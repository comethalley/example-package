<?php

namespace Examplepackage\ExamplePackage\Commands;

use Illuminate\Console\Command;

class ExamplePackageCommand extends Command
{
    public $signature = 'test-package {palindrome}';

    public $description = 'My command';

    public function handle()
    {
        // $this->comment('This is my package');

        // return self::SUCCESS;

        $command = $this->getCommand();
        $result = $this->Palindrome($command);
        //$result = $this->makeStar($command);
        $this->info($result);
    }

    private function getCommand(): string
    {
        return $this->argument('palindrome');
    }

    private function Palindrome(string $command)
    {
        if (strrev($command) == $command) {
            return 'Palindrome';
        } else {
            return 'Not Palindrome';
        }
    }

    private function makeStar(int $size)
    {
        for ($i = 0; $i < $size; $i++) {
            for ($j = $size - $i; $j > 1; $j--) {
                echo ' ';
            }
            for ($j = 0; $j <= $i; $j++) {
                echo '* ';
            }
            echo "\n";
        }

        for ($i = $size - 1; $i > 0; $i--) {
            for ($j = $size - $i; $j > 0; $j--) {
                echo ' ';
            }
            for ($j = 0; $j < $i; $j++) {
                echo '* ';
            }
            echo "\n";
        }
    }
}
