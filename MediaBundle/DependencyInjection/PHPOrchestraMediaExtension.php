<?php

namespace PHPOrchestra\MediaBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class PHPOrchestraMediaExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        foreach ($config['document'] as $class => $content) {
            if (is_array($content)) {
                $container->setParameter('php_orchestra_media.document.' . $class . '.class', $content['class']);
                if (array_key_exists('current_site', $content) && $content['current_site']) {
                    $container->register('php_orchestra_media.repository.' . $class, $content['repository'])
                        ->setFactoryService('doctrine.odm.mongodb.document_manager')
                        ->setFactoryMethod('getRepository')
                        ->addArgument($content['class'])
                        ->addMethodCall('setCurrentSiteManager', array(
                            new Reference('php_orchestra.manager.current_site')
                        ));
                } else {
                    $container->register('php_orchestra_media.repository.' . $class, $content['repository'])
                        ->setFactoryService('doctrine.odm.mongodb.document_manager')
                        ->setFactoryMethod('getRepository')
                        ->addArgument($content['class']);
                }
            }
        }

        if (!is_null($config['upload_dir'])) {
            $dir = $config['upload_dir'];
        } else {
            $dir = '/var/www/media-phporchestra';
        }
        $container->setParameter('php_orchestra_media.upload_dir', $dir);
        $container->setParameter('php_orchestra_media.no_image_available', $config['no_image_available']);
        $container->setParameter('php_orchestra_media.thumbnail.configuration', $config['thumbnail']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        $loader->load('display.yml');
        $loader->load('twig.yml');
        $loader->load('thumbnail.yml');
        $loader->load('subscriber.yml');
        $loader->load('listener.yml');
    }
}