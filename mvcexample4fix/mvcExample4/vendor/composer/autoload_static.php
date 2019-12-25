<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3f156e418193ec3dc465b103197346a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'MVC\\Config\\Database' => __DIR__ . '/../..' . '/src/Config/DataBase.php',
        'MVC\\Controllers\\HouseHoldController' => __DIR__ . '/../..' . '/src/Controllers/HouseHoldController.php',
        'MVC\\Controllers\\MemberController' => __DIR__ . '/../..' . '/src/Controllers/MemberController.php',
        'MVC\\Core\\Controller' => __DIR__ . '/../..' . '/src/Core/Controller.php',
        'MVC\\Core\\Model' => __DIR__ . '/../..' . '/src/Core/Model.php',
        'MVC\\Core\\ResourceModel' => __DIR__ . '/../..' . '/src/Core/ResourceModel.php',
        'MVC\\Core\\ResourceModelInterface' => __DIR__ . '/../..' . '/src/Core/ResourceModelInterface.php',
        'MVC\\Models\\HouseHold\\HouseHoldModel' => __DIR__ . '/../..' . '/src/Models/HouseHold/HouseholdModel.php',
        'MVC\\Models\\HouseHold\\HouseHoldRepository' => __DIR__ . '/../..' . '/src/Models/HouseHold/HouseholdRepository.php',
        'MVC\\Models\\HouseHold\\HouseHoldResourceModel' => __DIR__ . '/../..' . '/src/Models/HouseHold/HouseHoldResourceModel.php',
        'MVC\\Models\\Member\\MemberModel' => __DIR__ . '/../..' . '/src/Models/Member/MemberModel.php',
        'MVC\\Models\\Member\\MemberRepository' => __DIR__ . '/../..' . '/src/Models/Member/MemberRepository.php',
        'MVC\\Models\\Member\\MemberResourceModel' => __DIR__ . '/../..' . '/src/Models/Member/MemberResourceModel.php',
        'MVC\\URL\\Dispatcher' => __DIR__ . '/../..' . '/src/URL/Dispatcher.php',
        'MVC\\URL\\Request' => __DIR__ . '/../..' . '/src/URL/Request.php',
        'MVC\\URL\\Router' => __DIR__ . '/../..' . '/src/URL/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3f156e418193ec3dc465b103197346a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3f156e418193ec3dc465b103197346a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3f156e418193ec3dc465b103197346a::$classMap;

        }, null, ClassLoader::class);
    }
}
