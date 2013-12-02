## Wordpress Bootstrap

This is a skeleton repo for using wordpress with composer along with grunt and bower for UI assets. Includes configs for dev, stage, and production environments as well as some default configurations.

### Installation

You'll need to install composer. See [these awesome docs](http://getcomposer.org/doc/00-intro.md#installation-nix) to get started.

Once composer is installed follow these steps:

1. `composer install`
2. Setup a vhost that points to the html directory.
3. Copy the config/config.dev.sample.php to config.dev.php and edit the settings.
4. Hit your dev environment and install wordpress.

### Different Environments

You can have unlimited environment configs. To use this feature you'll need to add an environment variable to the vhost that matches the config file. Example:

```
<VirtualHost *:80>
    ...
    SetEnv WP_ENV production
    ...
</VirtualHost>
```

`config/config.production.php`

This will also expose WP_ENV to any plugin that needs it.