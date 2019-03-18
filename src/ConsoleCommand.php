<?php

namespace Programa;

use Programa\Util\CalculateNumbers;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class ConsoleCommand extends Command
{
    /**
     * @var CalculateNumbers
     */
    private $numbers;

    /**
     * @var array
     */
    private $userNumbers;

    public function __construct(CalculateNumbers $numbers)
    {

        parent::__construct("run");
        $this->numbers = $numbers;
        $this->userNumbers;
    }

    protected function configure()
    {
        $this->addArgument('number', InputArgument::OPTIONAL, 'some desc');
        $this->setDescription('Simple description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper("question");
        $question = new Question('Please provide a number: <comment>[1]</comment>');
        $question2 = new Question('Czy chcesz wiedzieć czy większa była trzykrotnosc liczb parzystych czy dwukrotnosc nieparzystych?: <comment>(tak/nie)</comment> ', 1);
        $question->setValidator(function ($answer) {
            if (!is_numeric($answer)) {
                throw new \RuntimeException('Wrong value type, please provide a number.');
            }

            if ((int)$answer < 1) {
                throw new \RuntimeException('n should be within range 1 < n < 99999');
            }
            return $answer;
        });

        while (true) {
            try {
                $number = $helper->ask($input, $output, $question);
                $answer = $helper->ask($input, $output, $question2);

                if (empty($number)) {
                    $output->writeln('<error>Please provide a number</error>');
                }

                $this->userNumbers[] = $number;

                if ($answer == 'tak') {
                    $this->numbers->init($this->userNumbers);
                    $result = $this->numbers->comparasion();

                    $msgForEven = 'Większa jest trzykrotność liczb parzystych';
                    $msgForEqual = 'Trzykrotność liczb parzystych i dwukrotność liczb nieparzystych jest równa';
                    $msgForOdd = 'Większa jest dwukrotność liczb nieparzystych';
                    $text = $result > 0 ? ($result == 2 ? $msgForEqual : $msgForEven) : $msgForOdd;

                    $output->writeln('<info>' . $text . '</info>');
                    break;
                }
            } catch (Exception $e) {
                $output->writeln('<error>' . $e->getMessage() . '</error>');
            }
        }
    }
}