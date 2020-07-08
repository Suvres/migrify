<?php

declare(strict_types=1);

namespace Migrify\ConfigFormatConverter\Finder;

use Symfony\Component\Finder\Finder;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ConfigFileFinder
{
    /**
     * @var FinderSanitizer
     */
    private $finderSanitizer;

    public function __construct(FinderSanitizer $finderSanitizer)
    {
        $this->finderSanitizer = $finderSanitizer;
    }

    /**
     * @return SmartFileInfo[]
     */
    public function findInDirectory(string $directory): array
    {
        if (is_file($directory)) {
            return [new SmartFileInfo($directory)];
        }

        $finder = Finder::create()
            ->files()
            ->in($directory)
            ->name('#\.xml$#i')
            ->sortByName();

        return $this->finderSanitizer->sanitize($finder);
    }
}
