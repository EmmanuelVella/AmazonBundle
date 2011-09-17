AmazonBundle
============

Installation
------------

Add the dependent bundle to the ``vendor/bundles`` directory. Add the following lines to the ``deps`` file::

    [aws-sdk-for-php]
        git=https://github.com/amazonwebservices/aws-sdk-for-php.git

    [cloudfusion]
        git=https://github.com/cloudfusion/cloudfusion.git

and run::

    bin/vendors install

Add the following lines in you ``autoload.php`` file::

    $loader->registerNamespaces(array(
        // ...
        'EmmanuelVella' => __DIR__.'/../vendor/bundles',
    ));

    // ...

    // Amazon Web Services
    require_once __DIR__.'/../vendor/amazonwebservices/sdk.class.php';
    require_once __DIR__.'/../vendor/cloudfusion/services/pas.class.php';

Configuration
-------------

Add you Amazon configuration to the config.yml file::

    amazon:
        key:        <your-key>
        secret_key: <your-secret-key>
        assoc_id :  <your-assoc-id>

Example
----

    $pas = $this->get('amazon.pas');
    $response = $pas->item_search('skillet awake');
    var_dump($response);

Todo
----

Add missing services (currently only Product Advertising Service is available)
