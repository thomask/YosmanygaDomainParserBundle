Provides integration for PhpDomainParser_ for your Symfony2 Project.


Installation
============

Bring in the vendor libraries
-----------------------------

This can be done in two different ways:

**Method #1**) Use composer

::

    "require": {
        "php": ">=5.3.2",
        "symfony/symfony": "2.1.*",
        "_comment": "your other packages",

        "yosmanyga/domain-parser-bundle": "dev-master",
    }


**Method #2**) Use git submodules

::

    git submodule add git://github.com/jeremykendall/php-domain-parser.git vendor/php-domain-parser
    git submodule add git://github.com/yosmanyga/YosmanygaDomainParserBundle.git vendor/bundles/Yosmanyga/DomainParserBundle

Register the PhpDomainParser and Yosmanyga namespaces
-----------------------------------------------------

Only required, when using submodules.

::

    // app/autoload.php
    $loader->registerNamespaces(array(
        'Yosmanyga' => __DIR__.'/../vendor/bundles',
        'Pdp'       => __DIR__.'/../vendor/php-domain-parser/library',
        // your other namespaces
    ));

Add DomainParserBundle to your application kernel
-------------------------------------------------

::

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Yosmanyga\DomainParserBundle\YosmanygaDomainParserBundle(),
            // ...
        );
    }

Usage
=====

Now you can use the "domain_parser" service and parse a domain.

::

    $this->container->get('domain_parser')->parse('subdomain.domain.com');

.. _PhpDomainParser: https://github.com/jeremykendall/php-domain-parser

