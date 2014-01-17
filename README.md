Symofony Minimal Security Bundles Setup
======================================

This is minimal Symfony2.3 setup with `FOSUserBundle`, `SonataAdminBundle`, `SonataUserBundle` and `HWIOAuthBundle` configured. This setup combines codes from [this](http://m2mdas.github.io/blog/2013/11/18/integrate-fosuserbundle-and-sonatauserbundle-easily/) post and [this](http://m2mdas.github.io/blog/2013/11/21/integrate-hwioauthbundle-with-fosuserbundle/) post.

1) Setup
----------------------------------

Clone the repository and switch to `fos_login_integrate` repo,

    git checkout fos_login_integrate


Issue composer install command,

    php composer.phar install --prefer-dist

Create tables,

    php app/console doctrine:schema:update --force

In `hwi_oauth` section of `app/config/config.yml` file add  `client_id` and `client_secret` infos of resources you want to setup. Also uncomment your required `resource_owners` section in `app/config/security.yml`. After configuration go to `/security_area/hello/world` url of the site.

To setup admin create admin user first,

    php app/console fos:user:create adminuser
    php app/console fos:user:promote adminuser ROLE_ADMIN

Then go to `/admin/dashboard` of the site.
