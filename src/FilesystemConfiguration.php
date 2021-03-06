<?php

namespace Endeavors\Fhir;

use Endeavors\Fhir\FhirClassGenerator;

final class FilesystemConfiguration
{
    /**
     * @return string The root output directory
     */
    public static function rootOutputDirectory(): string
    {
        return sprintf('%s%s..%2$soutput',
            __DIR__,
            DIRECTORY_SEPARATOR
        );
    }

    /**
     * @return string The relative namespace output directory
     */
    public static function namespaceOutputDirectory(): string
    {
        return sprintf('%s%s%1$s',
            DIRECTORY_SEPARATOR,
            str_replace('\\', DIRECTORY_SEPARATOR, rtrim(FhirClassGenerator::GENERATOR_NAMESPACE, "/\\"))
        );
    }

    public static function outputDirectory()
    {
        return sprintf("%s%s",
            static::rootOutputDirectory(),
            static::namespaceOutputDirectory()
        );
    }

    /**
     * The root input directory
     * 
     * @return string
     */
    public static function rootInputDirectory(): string
    {
        return sprintf('%s%s..%2$sinput',
            __DIR__,
            DIRECTORY_SEPARATOR
        );
    }

    public static function inputDirectory()
    {
        return sprintf("%s%s",
            static::rootInputDirectory(),
            DIRECTORY_SEPARATOR
        );
    }
}
