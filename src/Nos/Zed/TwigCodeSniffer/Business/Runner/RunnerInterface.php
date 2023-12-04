<?php

declare(strict_types=1);

namespace Nos\Zed\TwigCodeSniffer\Business\Runner;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TwigCsFixer\Report\Report;

interface RunnerInterface
{
    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return \TwigCsFixer\Report\Report
     */
    public function run(InputInterface $input, OutputInterface $output): Report;
}
