<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita461583db8ccd23c4d70b5e0c457841c
{
    public static $files = array (
        'a12da592622097d2b593a430e32e13fd' => __DIR__ . '/..' . '/nette/utils/src/loader.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Latte\\CompileException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Compiler' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Compiler.php',
        'Latte\\Engine' => __DIR__ . '/..' . '/latte/latte/src/Latte/Engine.php',
        'Latte\\Helpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Helpers.php',
        'Latte\\HtmlNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/HtmlNode.php',
        'Latte\\ILoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/ILoader.php',
        'Latte\\IMacro' => __DIR__ . '/..' . '/latte/latte/src/Latte/IMacro.php',
        'Latte\\Loaders\\FileLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/FileLoader.php',
        'Latte\\Loaders\\StringLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/StringLoader.php',
        'Latte\\MacroNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroNode.php',
        'Latte\\MacroTokens' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroTokens.php',
        'Latte\\Macros\\BlockMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/BlockMacros.php',
        'Latte\\Macros\\CoreMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/CoreMacros.php',
        'Latte\\Macros\\MacroSet' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/MacroSet.php',
        'Latte\\Parser' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Parser.php',
        'Latte\\PhpHelpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpHelpers.php',
        'Latte\\PhpWriter' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpWriter.php',
        'Latte\\RegexpException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\RuntimeException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Runtime\\CachingIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/CachingIterator.php',
        'Latte\\Runtime\\FilterExecutor' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterExecutor.php',
        'Latte\\Runtime\\FilterInfo' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterInfo.php',
        'Latte\\Runtime\\Filters' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Filters.php',
        'Latte\\Runtime\\Html' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Html.php',
        'Latte\\Runtime\\IHtmlString' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/IHtmlString.php',
        'Latte\\Runtime\\ISnippetBridge' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/ISnippetBridge.php',
        'Latte\\Runtime\\SnippetDriver' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/SnippetDriver.php',
        'Latte\\Runtime\\Template' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Template.php',
        'Latte\\Strict' => __DIR__ . '/..' . '/latte/latte/src/Latte/Strict.php',
        'Latte\\Token' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Token.php',
        'Latte\\TokenIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/TokenIterator.php',
        'Latte\\Tokenizer' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Tokenizer.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\LegacyObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/LegacyObject.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/Utils/ITranslator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Neon\\Decoder' => __DIR__ . '/..' . '/nette/neon/src/Neon/Decoder.php',
        'Nette\\Neon\\Encoder' => __DIR__ . '/..' . '/nette/neon/src/Neon/Encoder.php',
        'Nette\\Neon\\Entity' => __DIR__ . '/..' . '/nette/neon/src/Neon/Entity.php',
        'Nette\\Neon\\Exception' => __DIR__ . '/..' . '/nette/neon/src/Neon/Exception.php',
        'Nette\\Neon\\Neon' => __DIR__ . '/..' . '/nette/neon/src/Neon/Neon.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\PhpGenerator\\ClassType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/ClassType.php',
        'Nette\\PhpGenerator\\Closure' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Closure.php',
        'Nette\\PhpGenerator\\Constant' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Constant.php',
        'Nette\\PhpGenerator\\Factory' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Factory.php',
        'Nette\\PhpGenerator\\GlobalFunction' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/GlobalFunction.php',
        'Nette\\PhpGenerator\\Helpers' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Helpers.php',
        'Nette\\PhpGenerator\\Method' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Method.php',
        'Nette\\PhpGenerator\\Parameter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Parameter.php',
        'Nette\\PhpGenerator\\PhpFile' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpFile.php',
        'Nette\\PhpGenerator\\PhpLiteral' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpLiteral.php',
        'Nette\\PhpGenerator\\PhpNamespace' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpNamespace.php',
        'Nette\\PhpGenerator\\Property' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Property.php',
        'Nette\\PhpGenerator\\Traits\\CommentAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/CommentAware.php',
        'Nette\\PhpGenerator\\Traits\\FunctionLike' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/FunctionLike.php',
        'Nette\\PhpGenerator\\Traits\\NameAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/NameAware.php',
        'Nette\\PhpGenerator\\Traits\\VisibilityAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/VisibilityAware.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/Utils/StaticClass.php',
        'Nette\\StaticClassException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/Utils/IHtmlString.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'Wpseed\\Widgetizer\\Admin' => __DIR__ . '/../..' . '/includes/class-admin.php',
        'Wpseed\\Widgetizer\\Elementor\\Elementor_Builder' => __DIR__ . '/../..' . '/includes/elementor/class-elementor-builder.php',
        'Wpseed\\Widgetizer\\Elementor\\Elementor_Widget' => __DIR__ . '/../..' . '/includes/elementor/class-elementor-widget.php',
        'Wpseed\\Widgetizer\\Helpers' => __DIR__ . '/../..' . '/includes/class-helpers.php',
        'Wpseed\\Widgetizer\\Rest_Api\\Rest_Api_Controller' => __DIR__ . '/../..' . '/includes/rest-api/class-rest-api-controller.php',
        'Wpseed\\Widgetizer\\Rest_Api\\Rest_Api_Widgets_Controller' => __DIR__ . '/../..' . '/includes/rest-api/class-rest-api-widgets-controller.php',
        'Wpseed\\Widgetizer\\Validator' => __DIR__ . '/../..' . '/includes/class-validator.php',
        'Wpseed\\Widgetizer\\Widgetizer' => __DIR__ . '/../..' . '/includes/class-widgetizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita461583db8ccd23c4d70b5e0c457841c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita461583db8ccd23c4d70b5e0c457841c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita461583db8ccd23c4d70b5e0c457841c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita461583db8ccd23c4d70b5e0c457841c::$classMap;

        }, null, ClassLoader::class);
    }
}