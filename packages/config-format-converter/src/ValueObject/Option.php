<?php

declare(strict_types=1);

namespace Migrify\ConfigFormatConverter\ValueObject;

final class Option
{
    /**
     * @var string
     */
    public const SOURCE = 'source';

    /**
     * @var string
     */
    public const OUTPUT_FORMAT = 'output-format';

    /**
     * @var string
     */
    public const DELETE = 'delete';

    /**
     * @var string
     */
    public const TARGET_SYMFONY_VERSION = 'target-symfony-version';
}
