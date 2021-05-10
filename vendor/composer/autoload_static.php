<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc26333d865e0329b638bdc17afd29896
{
    public static $files = array (
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
        'f864ae44e8154e5ff6f4eec32f46d37f' => __DIR__ . '/../..' . '/config/setup.php',
        '87988fc7b1c1f093da22a1a3de972f3a' => __DIR__ . '/../..' . '/config/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'T' => 
        array (
            'TrueBV\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Escaper\\' => 16,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-smartypants',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\Api\\Api' => __DIR__ . '/../..' . '/src/Api/Api.php',
        'Kirby\\Api\\Collection' => __DIR__ . '/../..' . '/src/Api/Collection.php',
        'Kirby\\Api\\Model' => __DIR__ . '/../..' . '/src/Api/Model.php',
        'Kirby\\Cache\\ApcuCache' => __DIR__ . '/../..' . '/src/Cache/ApcuCache.php',
        'Kirby\\Cache\\Cache' => __DIR__ . '/../..' . '/src/Cache/Cache.php',
        'Kirby\\Cache\\FileCache' => __DIR__ . '/../..' . '/src/Cache/FileCache.php',
        'Kirby\\Cache\\MemCached' => __DIR__ . '/../..' . '/src/Cache/MemCached.php',
        'Kirby\\Cache\\MemoryCache' => __DIR__ . '/../..' . '/src/Cache/MemoryCache.php',
        'Kirby\\Cache\\NullCache' => __DIR__ . '/../..' . '/src/Cache/NullCache.php',
        'Kirby\\Cache\\Value' => __DIR__ . '/../..' . '/src/Cache/Value.php',
        'Kirby\\Cms\\App' => __DIR__ . '/../..' . '/src/Cms/App.php',
        'Kirby\\Cms\\AppCaches' => __DIR__ . '/../..' . '/src/Cms/AppCaches.php',
        'Kirby\\Cms\\AppErrors' => __DIR__ . '/../..' . '/src/Cms/AppErrors.php',
        'Kirby\\Cms\\AppPlugins' => __DIR__ . '/../..' . '/src/Cms/AppPlugins.php',
        'Kirby\\Cms\\AppTranslations' => __DIR__ . '/../..' . '/src/Cms/AppTranslations.php',
        'Kirby\\Cms\\AppUsers' => __DIR__ . '/../..' . '/src/Cms/AppUsers.php',
        'Kirby\\Cms\\Asset' => __DIR__ . '/../..' . '/src/Cms/Asset.php',
        'Kirby\\Cms\\Auth' => __DIR__ . '/../..' . '/src/Cms/Auth.php',
        'Kirby\\Cms\\Auth\\Challenge' => __DIR__ . '/../..' . '/src/Cms/Auth/Challenge.php',
        'Kirby\\Cms\\Auth\\EmailChallenge' => __DIR__ . '/../..' . '/src/Cms/Auth/EmailChallenge.php',
        'Kirby\\Cms\\Auth\\Status' => __DIR__ . '/../..' . '/src/Cms/Auth/Status.php',
        'Kirby\\Cms\\Block' => __DIR__ . '/../..' . '/src/Cms/Block.php',
        'Kirby\\Cms\\BlockConverter' => __DIR__ . '/../..' . '/src/Cms/BlockConverter.php',
        'Kirby\\Cms\\Blocks' => __DIR__ . '/../..' . '/src/Cms/Blocks.php',
        'Kirby\\Cms\\Blueprint' => __DIR__ . '/../..' . '/src/Cms/Blueprint.php',
        'Kirby\\Cms\\Collection' => __DIR__ . '/../..' . '/src/Cms/Collection.php',
        'Kirby\\Cms\\Collections' => __DIR__ . '/../..' . '/src/Cms/Collections.php',
        'Kirby\\Cms\\Content' => __DIR__ . '/../..' . '/src/Cms/Content.php',
        'Kirby\\Cms\\ContentLock' => __DIR__ . '/../..' . '/src/Cms/ContentLock.php',
        'Kirby\\Cms\\ContentLocks' => __DIR__ . '/../..' . '/src/Cms/ContentLocks.php',
        'Kirby\\Cms\\ContentTranslation' => __DIR__ . '/../..' . '/src/Cms/ContentTranslation.php',
        'Kirby\\Cms\\Email' => __DIR__ . '/../..' . '/src/Cms/Email.php',
        'Kirby\\Cms\\Event' => __DIR__ . '/../..' . '/src/Cms/Event.php',
        'Kirby\\Cms\\Field' => __DIR__ . '/../..' . '/src/Cms/Field.php',
        'Kirby\\Cms\\Fieldset' => __DIR__ . '/../..' . '/src/Cms/Fieldset.php',
        'Kirby\\Cms\\Fieldsets' => __DIR__ . '/../..' . '/src/Cms/Fieldsets.php',
        'Kirby\\Cms\\File' => __DIR__ . '/../..' . '/src/Cms/File.php',
        'Kirby\\Cms\\FileActions' => __DIR__ . '/../..' . '/src/Cms/FileActions.php',
        'Kirby\\Cms\\FileBlueprint' => __DIR__ . '/../..' . '/src/Cms/FileBlueprint.php',
        'Kirby\\Cms\\FileFoundation' => __DIR__ . '/../..' . '/src/Cms/FileFoundation.php',
        'Kirby\\Cms\\FileModifications' => __DIR__ . '/../..' . '/src/Cms/FileModifications.php',
        'Kirby\\Cms\\FilePermissions' => __DIR__ . '/../..' . '/src/Cms/FilePermissions.php',
        'Kirby\\Cms\\FilePicker' => __DIR__ . '/../..' . '/src/Cms/FilePicker.php',
        'Kirby\\Cms\\FileRules' => __DIR__ . '/../..' . '/src/Cms/FileRules.php',
        'Kirby\\Cms\\FileVersion' => __DIR__ . '/../..' . '/src/Cms/FileVersion.php',
        'Kirby\\Cms\\Filename' => __DIR__ . '/../..' . '/src/Cms/Filename.php',
        'Kirby\\Cms\\Files' => __DIR__ . '/../..' . '/src/Cms/Files.php',
        'Kirby\\Cms\\Form' => __DIR__ . '/../..' . '/src/Cms/Form.php',
        'Kirby\\Cms\\HasChildren' => __DIR__ . '/../..' . '/src/Cms/HasChildren.php',
        'Kirby\\Cms\\HasFiles' => __DIR__ . '/../..' . '/src/Cms/HasFiles.php',
        'Kirby\\Cms\\HasMethods' => __DIR__ . '/../..' . '/src/Cms/HasMethods.php',
        'Kirby\\Cms\\HasSiblings' => __DIR__ . '/../..' . '/src/Cms/HasSiblings.php',
        'Kirby\\Cms\\Html' => __DIR__ . '/../..' . '/src/Cms/Html.php',
        'Kirby\\Cms\\Ingredients' => __DIR__ . '/../..' . '/src/Cms/Ingredients.php',
        'Kirby\\Cms\\Item' => __DIR__ . '/../..' . '/src/Cms/Item.php',
        'Kirby\\Cms\\Items' => __DIR__ . '/../..' . '/src/Cms/Items.php',
        'Kirby\\Cms\\Language' => __DIR__ . '/../..' . '/src/Cms/Language.php',
        'Kirby\\Cms\\LanguageRouter' => __DIR__ . '/../..' . '/src/Cms/LanguageRouter.php',
        'Kirby\\Cms\\LanguageRoutes' => __DIR__ . '/../..' . '/src/Cms/LanguageRoutes.php',
        'Kirby\\Cms\\LanguageRules' => __DIR__ . '/../..' . '/src/Cms/LanguageRules.php',
        'Kirby\\Cms\\Languages' => __DIR__ . '/../..' . '/src/Cms/Languages.php',
        'Kirby\\Cms\\Layout' => __DIR__ . '/../..' . '/src/Cms/Layout.php',
        'Kirby\\Cms\\LayoutColumn' => __DIR__ . '/../..' . '/src/Cms/LayoutColumn.php',
        'Kirby\\Cms\\LayoutColumns' => __DIR__ . '/../..' . '/src/Cms/LayoutColumns.php',
        'Kirby\\Cms\\Layouts' => __DIR__ . '/../..' . '/src/Cms/Layouts.php',
        'Kirby\\Cms\\Media' => __DIR__ . '/../..' . '/src/Cms/Media.php',
        'Kirby\\Cms\\Model' => __DIR__ . '/../..' . '/src/Cms/Model.php',
        'Kirby\\Cms\\ModelPermissions' => __DIR__ . '/../..' . '/src/Cms/ModelPermissions.php',
        'Kirby\\Cms\\ModelWithContent' => __DIR__ . '/../..' . '/src/Cms/ModelWithContent.php',
        'Kirby\\Cms\\Nest' => __DIR__ . '/../..' . '/src/Cms/Nest.php',
        'Kirby\\Cms\\NestCollection' => __DIR__ . '/../..' . '/src/Cms/NestCollection.php',
        'Kirby\\Cms\\NestObject' => __DIR__ . '/../..' . '/src/Cms/NestObject.php',
        'Kirby\\Cms\\Page' => __DIR__ . '/../..' . '/src/Cms/Page.php',
        'Kirby\\Cms\\PageActions' => __DIR__ . '/../..' . '/src/Cms/PageActions.php',
        'Kirby\\Cms\\PageBlueprint' => __DIR__ . '/../..' . '/src/Cms/PageBlueprint.php',
        'Kirby\\Cms\\PagePermissions' => __DIR__ . '/../..' . '/src/Cms/PagePermissions.php',
        'Kirby\\Cms\\PagePicker' => __DIR__ . '/../..' . '/src/Cms/PagePicker.php',
        'Kirby\\Cms\\PageRules' => __DIR__ . '/../..' . '/src/Cms/PageRules.php',
        'Kirby\\Cms\\PageSiblings' => __DIR__ . '/../..' . '/src/Cms/PageSiblings.php',
        'Kirby\\Cms\\Pages' => __DIR__ . '/../..' . '/src/Cms/Pages.php',
        'Kirby\\Cms\\Pagination' => __DIR__ . '/../..' . '/src/Cms/Pagination.php',
        'Kirby\\Cms\\Permissions' => __DIR__ . '/../..' . '/src/Cms/Permissions.php',
        'Kirby\\Cms\\Picker' => __DIR__ . '/../..' . '/src/Cms/Picker.php',
        'Kirby\\Cms\\Plugin' => __DIR__ . '/../..' . '/src/Cms/Plugin.php',
        'Kirby\\Cms\\PluginAssets' => __DIR__ . '/../..' . '/src/Cms/PluginAssets.php',
        'Kirby\\Cms\\R' => __DIR__ . '/../..' . '/src/Cms/R.php',
        'Kirby\\Cms\\Responder' => __DIR__ . '/../..' . '/src/Cms/Responder.php',
        'Kirby\\Cms\\Response' => __DIR__ . '/../..' . '/src/Cms/Response.php',
        'Kirby\\Cms\\Role' => __DIR__ . '/../..' . '/src/Cms/Role.php',
        'Kirby\\Cms\\Roles' => __DIR__ . '/../..' . '/src/Cms/Roles.php',
        'Kirby\\Cms\\S' => __DIR__ . '/../..' . '/src/Cms/S.php',
        'Kirby\\Cms\\Search' => __DIR__ . '/../..' . '/src/Cms/Search.php',
        'Kirby\\Cms\\Section' => __DIR__ . '/../..' . '/src/Cms/Section.php',
        'Kirby\\Cms\\Site' => __DIR__ . '/../..' . '/src/Cms/Site.php',
        'Kirby\\Cms\\SiteActions' => __DIR__ . '/../..' . '/src/Cms/SiteActions.php',
        'Kirby\\Cms\\SiteBlueprint' => __DIR__ . '/../..' . '/src/Cms/SiteBlueprint.php',
        'Kirby\\Cms\\SitePermissions' => __DIR__ . '/../..' . '/src/Cms/SitePermissions.php',
        'Kirby\\Cms\\SiteRules' => __DIR__ . '/../..' . '/src/Cms/SiteRules.php',
        'Kirby\\Cms\\Structure' => __DIR__ . '/../..' . '/src/Cms/Structure.php',
        'Kirby\\Cms\\StructureObject' => __DIR__ . '/../..' . '/src/Cms/StructureObject.php',
        'Kirby\\Cms\\System' => __DIR__ . '/../..' . '/src/Cms/System.php',
        'Kirby\\Cms\\Template' => __DIR__ . '/../..' . '/src/Cms/Template.php',
        'Kirby\\Cms\\Translation' => __DIR__ . '/../..' . '/src/Cms/Translation.php',
        'Kirby\\Cms\\Translations' => __DIR__ . '/../..' . '/src/Cms/Translations.php',
        'Kirby\\Cms\\Url' => __DIR__ . '/../..' . '/src/Cms/Url.php',
        'Kirby\\Cms\\User' => __DIR__ . '/../..' . '/src/Cms/User.php',
        'Kirby\\Cms\\UserActions' => __DIR__ . '/../..' . '/src/Cms/UserActions.php',
        'Kirby\\Cms\\UserBlueprint' => __DIR__ . '/../..' . '/src/Cms/UserBlueprint.php',
        'Kirby\\Cms\\UserPermissions' => __DIR__ . '/../..' . '/src/Cms/UserPermissions.php',
        'Kirby\\Cms\\UserPicker' => __DIR__ . '/../..' . '/src/Cms/UserPicker.php',
        'Kirby\\Cms\\UserRules' => __DIR__ . '/../..' . '/src/Cms/UserRules.php',
        'Kirby\\Cms\\Users' => __DIR__ . '/../..' . '/src/Cms/Users.php',
        'Kirby\\Cms\\Visitor' => __DIR__ . '/../..' . '/src/Cms/Visitor.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Kirby\\Data\\Data' => __DIR__ . '/../..' . '/src/Data/Data.php',
        'Kirby\\Data\\Handler' => __DIR__ . '/../..' . '/src/Data/Handler.php',
        'Kirby\\Data\\Json' => __DIR__ . '/../..' . '/src/Data/Json.php',
        'Kirby\\Data\\PHP' => __DIR__ . '/../..' . '/src/Data/PHP.php',
        'Kirby\\Data\\Txt' => __DIR__ . '/../..' . '/src/Data/Txt.php',
        'Kirby\\Data\\Xml' => __DIR__ . '/../..' . '/src/Data/Xml.php',
        'Kirby\\Data\\Yaml' => __DIR__ . '/../..' . '/src/Data/Yaml.php',
        'Kirby\\Database\\Database' => __DIR__ . '/../..' . '/src/Database/Database.php',
        'Kirby\\Database\\Db' => __DIR__ . '/../..' . '/src/Database/Db.php',
        'Kirby\\Database\\Query' => __DIR__ . '/../..' . '/src/Database/Query.php',
        'Kirby\\Database\\Sql' => __DIR__ . '/../..' . '/src/Database/Sql.php',
        'Kirby\\Database\\Sql\\Mysql' => __DIR__ . '/../..' . '/src/Database/Sql/Mysql.php',
        'Kirby\\Database\\Sql\\Sqlite' => __DIR__ . '/../..' . '/src/Database/Sql/Sqlite.php',
        'Kirby\\Email\\Body' => __DIR__ . '/../..' . '/src/Email/Body.php',
        'Kirby\\Email\\Email' => __DIR__ . '/../..' . '/src/Email/Email.php',
        'Kirby\\Email\\PHPMailer' => __DIR__ . '/../..' . '/src/Email/PHPMailer.php',
        'Kirby\\Exception\\BadMethodCallException' => __DIR__ . '/../..' . '/src/Exception/BadMethodCallException.php',
        'Kirby\\Exception\\DuplicateException' => __DIR__ . '/../..' . '/src/Exception/DuplicateException.php',
        'Kirby\\Exception\\ErrorPageException' => __DIR__ . '/../..' . '/src/Exception/ErrorPageException.php',
        'Kirby\\Exception\\Exception' => __DIR__ . '/../..' . '/src/Exception/Exception.php',
        'Kirby\\Exception\\InvalidArgumentException' => __DIR__ . '/../..' . '/src/Exception/InvalidArgumentException.php',
        'Kirby\\Exception\\LogicException' => __DIR__ . '/../..' . '/src/Exception/LogicException.php',
        'Kirby\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/src/Exception/NotFoundException.php',
        'Kirby\\Exception\\PermissionException' => __DIR__ . '/../..' . '/src/Exception/PermissionException.php',
        'Kirby\\Form\\Field' => __DIR__ . '/../..' . '/src/Form/Field.php',
        'Kirby\\Form\\FieldClass' => __DIR__ . '/../..' . '/src/Form/FieldClass.php',
        'Kirby\\Form\\Field\\BlocksField' => __DIR__ . '/../..' . '/src/Form/Field/BlocksField.php',
        'Kirby\\Form\\Field\\LayoutField' => __DIR__ . '/../..' . '/src/Form/Field/LayoutField.php',
        'Kirby\\Form\\Fields' => __DIR__ . '/../..' . '/src/Form/Fields.php',
        'Kirby\\Form\\Form' => __DIR__ . '/../..' . '/src/Form/Form.php',
        'Kirby\\Form\\Mixin\\EmptyState' => __DIR__ . '/../..' . '/src/Form/Mixin/EmptyState.php',
        'Kirby\\Form\\Mixin\\Max' => __DIR__ . '/../..' . '/src/Form/Mixin/Max.php',
        'Kirby\\Form\\Mixin\\Min' => __DIR__ . '/../..' . '/src/Form/Mixin/Min.php',
        'Kirby\\Form\\Options' => __DIR__ . '/../..' . '/src/Form/Options.php',
        'Kirby\\Form\\OptionsApi' => __DIR__ . '/../..' . '/src/Form/OptionsApi.php',
        'Kirby\\Form\\OptionsQuery' => __DIR__ . '/../..' . '/src/Form/OptionsQuery.php',
        'Kirby\\Form\\Validations' => __DIR__ . '/../..' . '/src/Form/Validations.php',
        'Kirby\\Http\\Cookie' => __DIR__ . '/../..' . '/src/Http/Cookie.php',
        'Kirby\\Http\\Exceptions\\NextRouteException' => __DIR__ . '/../..' . '/src/Http/Exceptions/NextRouteException.php',
        'Kirby\\Http\\Header' => __DIR__ . '/../..' . '/src/Http/Header.php',
        'Kirby\\Http\\Idn' => __DIR__ . '/../..' . '/src/Http/Idn.php',
        'Kirby\\Http\\Params' => __DIR__ . '/../..' . '/src/Http/Params.php',
        'Kirby\\Http\\Path' => __DIR__ . '/../..' . '/src/Http/Path.php',
        'Kirby\\Http\\Query' => __DIR__ . '/../..' . '/src/Http/Query.php',
        'Kirby\\Http\\Remote' => __DIR__ . '/../..' . '/src/Http/Remote.php',
        'Kirby\\Http\\Request' => __DIR__ . '/../..' . '/src/Http/Request.php',
        'Kirby\\Http\\Request\\Auth\\BasicAuth' => __DIR__ . '/../..' . '/src/Http/Request/Auth/BasicAuth.php',
        'Kirby\\Http\\Request\\Auth\\BearerAuth' => __DIR__ . '/../..' . '/src/Http/Request/Auth/BearerAuth.php',
        'Kirby\\Http\\Request\\Body' => __DIR__ . '/../..' . '/src/Http/Request/Body.php',
        'Kirby\\Http\\Request\\Data' => __DIR__ . '/../..' . '/src/Http/Request/Data.php',
        'Kirby\\Http\\Request\\Files' => __DIR__ . '/../..' . '/src/Http/Request/Files.php',
        'Kirby\\Http\\Request\\Query' => __DIR__ . '/../..' . '/src/Http/Request/Query.php',
        'Kirby\\Http\\Response' => __DIR__ . '/../..' . '/src/Http/Response.php',
        'Kirby\\Http\\Route' => __DIR__ . '/../..' . '/src/Http/Route.php',
        'Kirby\\Http\\Router' => __DIR__ . '/../..' . '/src/Http/Router.php',
        'Kirby\\Http\\Server' => __DIR__ . '/../..' . '/src/Http/Server.php',
        'Kirby\\Http\\Uri' => __DIR__ . '/../..' . '/src/Http/Uri.php',
        'Kirby\\Http\\Url' => __DIR__ . '/../..' . '/src/Http/Url.php',
        'Kirby\\Http\\Visitor' => __DIR__ . '/../..' . '/src/Http/Visitor.php',
        'Kirby\\Image\\Camera' => __DIR__ . '/../..' . '/src/Image/Camera.php',
        'Kirby\\Image\\Darkroom' => __DIR__ . '/../..' . '/src/Image/Darkroom.php',
        'Kirby\\Image\\Darkroom\\GdLib' => __DIR__ . '/../..' . '/src/Image/Darkroom/GdLib.php',
        'Kirby\\Image\\Darkroom\\ImageMagick' => __DIR__ . '/../..' . '/src/Image/Darkroom/ImageMagick.php',
        'Kirby\\Image\\Dimensions' => __DIR__ . '/../..' . '/src/Image/Dimensions.php',
        'Kirby\\Image\\Exif' => __DIR__ . '/../..' . '/src/Image/Exif.php',
        'Kirby\\Image\\Image' => __DIR__ . '/../..' . '/src/Image/Image.php',
        'Kirby\\Image\\Location' => __DIR__ . '/../..' . '/src/Image/Location.php',
        'Kirby\\Panel\\File' => __DIR__ . '/../..' . '/src/Panel/File.php',
        'Kirby\\Panel\\Model' => __DIR__ . '/../..' . '/src/Panel/Model.php',
        'Kirby\\Panel\\Page' => __DIR__ . '/../..' . '/src/Panel/Page.php',
        'Kirby\\Panel\\Panel' => __DIR__ . '/../..' . '/src/Panel/Panel.php',
        'Kirby\\Panel\\Plugins' => __DIR__ . '/../..' . '/src/Panel/Plugins.php',
        'Kirby\\Panel\\Site' => __DIR__ . '/../..' . '/src/Panel/Site.php',
        'Kirby\\Panel\\User' => __DIR__ . '/../..' . '/src/Panel/User.php',
        'Kirby\\Parsley\\Element' => __DIR__ . '/../..' . '/src/Parsley/Element.php',
        'Kirby\\Parsley\\Inline' => __DIR__ . '/../..' . '/src/Parsley/Inline.php',
        'Kirby\\Parsley\\Parsley' => __DIR__ . '/../..' . '/src/Parsley/Parsley.php',
        'Kirby\\Parsley\\Schema' => __DIR__ . '/../..' . '/src/Parsley/Schema.php',
        'Kirby\\Parsley\\Schema\\Blocks' => __DIR__ . '/../..' . '/src/Parsley/Schema/Blocks.php',
        'Kirby\\Parsley\\Schema\\Plain' => __DIR__ . '/../..' . '/src/Parsley/Schema/Plain.php',
        'Kirby\\Sane\\Handler' => __DIR__ . '/../..' . '/src/Sane/Handler.php',
        'Kirby\\Sane\\Sane' => __DIR__ . '/../..' . '/src/Sane/Sane.php',
        'Kirby\\Sane\\Svg' => __DIR__ . '/../..' . '/src/Sane/Svg.php',
        'Kirby\\Sane\\Svgz' => __DIR__ . '/../..' . '/src/Sane/Svgz.php',
        'Kirby\\Sane\\Xml' => __DIR__ . '/../..' . '/src/Sane/Xml.php',
        'Kirby\\Session\\AutoSession' => __DIR__ . '/../..' . '/src/Session/AutoSession.php',
        'Kirby\\Session\\FileSessionStore' => __DIR__ . '/../..' . '/src/Session/FileSessionStore.php',
        'Kirby\\Session\\Session' => __DIR__ . '/../..' . '/src/Session/Session.php',
        'Kirby\\Session\\SessionData' => __DIR__ . '/../..' . '/src/Session/SessionData.php',
        'Kirby\\Session\\SessionStore' => __DIR__ . '/../..' . '/src/Session/SessionStore.php',
        'Kirby\\Session\\Sessions' => __DIR__ . '/../..' . '/src/Session/Sessions.php',
        'Kirby\\Text\\KirbyTag' => __DIR__ . '/../..' . '/src/Text/KirbyTag.php',
        'Kirby\\Text\\KirbyTags' => __DIR__ . '/../..' . '/src/Text/KirbyTags.php',
        'Kirby\\Text\\Markdown' => __DIR__ . '/../..' . '/src/Text/Markdown.php',
        'Kirby\\Text\\SmartyPants' => __DIR__ . '/../..' . '/src/Text/SmartyPants.php',
        'Kirby\\Toolkit\\A' => __DIR__ . '/../..' . '/src/Toolkit/A.php',
        'Kirby\\Toolkit\\Collection' => __DIR__ . '/../..' . '/src/Toolkit/Collection.php',
        'Kirby\\Toolkit\\Component' => __DIR__ . '/../..' . '/src/Toolkit/Component.php',
        'Kirby\\Toolkit\\Config' => __DIR__ . '/../..' . '/src/Toolkit/Config.php',
        'Kirby\\Toolkit\\Controller' => __DIR__ . '/../..' . '/src/Toolkit/Controller.php',
        'Kirby\\Toolkit\\Dir' => __DIR__ . '/../..' . '/src/Toolkit/Dir.php',
        'Kirby\\Toolkit\\Escape' => __DIR__ . '/../..' . '/src/Toolkit/Escape.php',
        'Kirby\\Toolkit\\F' => __DIR__ . '/../..' . '/src/Toolkit/F.php',
        'Kirby\\Toolkit\\Facade' => __DIR__ . '/../..' . '/src/Toolkit/Facade.php',
        'Kirby\\Toolkit\\File' => __DIR__ . '/../..' . '/src/Toolkit/File.php',
        'Kirby\\Toolkit\\Html' => __DIR__ . '/../..' . '/src/Toolkit/Html.php',
        'Kirby\\Toolkit\\I18n' => __DIR__ . '/../..' . '/src/Toolkit/I18n.php',
        'Kirby\\Toolkit\\Iterator' => __DIR__ . '/../..' . '/src/Toolkit/Iterator.php',
        'Kirby\\Toolkit\\Locale' => __DIR__ . '/../..' . '/src/Toolkit/Locale.php',
        'Kirby\\Toolkit\\Mime' => __DIR__ . '/../..' . '/src/Toolkit/Mime.php',
        'Kirby\\Toolkit\\Obj' => __DIR__ . '/../..' . '/src/Toolkit/Obj.php',
        'Kirby\\Toolkit\\Pagination' => __DIR__ . '/../..' . '/src/Toolkit/Pagination.php',
        'Kirby\\Toolkit\\Properties' => __DIR__ . '/../..' . '/src/Toolkit/Properties.php',
        'Kirby\\Toolkit\\Query' => __DIR__ . '/../..' . '/src/Toolkit/Query.php',
        'Kirby\\Toolkit\\Silo' => __DIR__ . '/../..' . '/src/Toolkit/Silo.php',
        'Kirby\\Toolkit\\Str' => __DIR__ . '/../..' . '/src/Toolkit/Str.php',
        'Kirby\\Toolkit\\Tpl' => __DIR__ . '/../..' . '/src/Toolkit/Tpl.php',
        'Kirby\\Toolkit\\V' => __DIR__ . '/../..' . '/src/Toolkit/V.php',
        'Kirby\\Toolkit\\View' => __DIR__ . '/../..' . '/src/Toolkit/View.php',
        'Kirby\\Toolkit\\Xml' => __DIR__ . '/../..' . '/src/Toolkit/Xml.php',
        'Laminas\\Escaper\\Escaper' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Escaper.php',
        'Laminas\\Escaper\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Exception/ExceptionInterface.php',
        'Laminas\\Escaper\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Exception/InvalidArgumentException.php',
        'Laminas\\Escaper\\Exception\\RuntimeException' => __DIR__ . '/..' . '/laminas/laminas-escaper/src/Exception/RuntimeException.php',
        'Laminas\\ZendFrameworkBridge\\Autoloader' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/Autoloader.php',
        'Laminas\\ZendFrameworkBridge\\ConfigPostProcessor' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/ConfigPostProcessor.php',
        'Laminas\\ZendFrameworkBridge\\Module' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/Module.php',
        'Laminas\\ZendFrameworkBridge\\Replacements' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/Replacements.php',
        'Laminas\\ZendFrameworkBridge\\RewriteRules' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/RewriteRules.php',
        'League\\ColorExtractor\\Color' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Color.php',
        'League\\ColorExtractor\\ColorExtractor' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/ColorExtractor.php',
        'League\\ColorExtractor\\Palette' => __DIR__ . '/..' . '/league/color-extractor/src/League/ColorExtractor/Palette.php',
        'Michelf\\SmartyPants' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPants.php',
        'Michelf\\SmartyPantsTypographer' => __DIR__ . '/..' . '/michelf/php-smartypants/Michelf/SmartyPantsTypographer.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Parsedown' => __DIR__ . '/../..' . '/dependencies/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/../..' . '/dependencies/parsedown-extra/ParsedownExtra.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'TrueBV\\Exception\\DomainOutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/DomainOutOfBoundsException.php',
        'TrueBV\\Exception\\LabelOutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/LabelOutOfBoundsException.php',
        'TrueBV\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/true/punycode/src/Exception/OutOfBoundsException.php',
        'TrueBV\\Punycode' => __DIR__ . '/..' . '/true/punycode/src/Punycode.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'claviska\\SimpleImage' => __DIR__ . '/..' . '/claviska/simpleimage/src/claviska/SimpleImage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc26333d865e0329b638bdc17afd29896::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc26333d865e0329b638bdc17afd29896::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitc26333d865e0329b638bdc17afd29896::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc26333d865e0329b638bdc17afd29896::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc26333d865e0329b638bdc17afd29896::$classMap;

        }, null, ClassLoader::class);
    }
}
