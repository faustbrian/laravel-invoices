<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Invoices\Data;

final class Country extends AbstractData
{
    public function __construct(
        public readonly string $name,
        public readonly string $code,
    ) {
        //
    }
}
