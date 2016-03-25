<?php

namespace CmPayments\Crate\Tests\Command;

use CmPayments\Crate\Test\CommandTestCase;
use Symfony\Component\Console\Input\ArrayInput;

class ConfigurableTest extends CommandTestCase
{
    public function testConfigure()
    {
        $definition = $this->getCommand()->getDefinition();

        $this->assertTrue($definition->hasOption('configuration'));
    }

    public function testGetConfig()
    {
        file_put_contents('crate.json', '{}');

        $command = $this->app->get('test');
        $input = new ArrayInput(array());
        $input->bind($command->getDefinition());

        $this->assertInstanceOf(
            'CmPayments\\Crate\\Configuration',
            $this->callMethod($command, 'getConfig', array($input))
        );
    }

    protected function getCommand()
    {
        return new TestConfigurable('test');
    }
}
