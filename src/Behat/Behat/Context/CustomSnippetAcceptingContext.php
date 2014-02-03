<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Context;

use Behat\Behat\Context\Snippet\Generator\ContextSnippetGenerator;

/**
 * Custom-snippet-accepting context interface.
 *
 * Context that implements this interface is treated as a custom-snippet-friendly context.
 *
 * @see ContextSnippetGenerator
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface CustomSnippetAcceptingContext extends SnippetAcceptingContext
{
    /**
     * Returns type of the snippets that this context accepts.
     *
     * @return string
     */
    public static function getAcceptedSnippetType();
}