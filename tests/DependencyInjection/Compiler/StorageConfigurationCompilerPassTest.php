<?php

namespace DH\AuditorBundle\Tests\DependencyInjection\Compiler;

use DH\AuditorBundle\DependencyInjection\Compiler\StorageConfigurationCompilerPass;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractCompilerPassTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @internal
 */
final class StorageConfigurationCompilerPassTest extends AbstractCompilerPassTestCase
{
    protected function registerCompilerPass(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new StorageConfigurationCompilerPass());
    }

//    public function testCompilerPass(): void
//    {
//        $this->compile();
//
//        $serviceId = 'dh_auditor.provider.doctrine.storage_services.doctrine.orm.default_entity_manager';
//        $this->assertContainerBuilderHasAlias($serviceId, StorageService::class);
//        $this->assertContainerBuilderHasService($serviceId, StorageService::class);
//    }
}