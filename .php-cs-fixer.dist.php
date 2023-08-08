<?php

/**
 * This file is part of the trollandtoad/ebay-sdk-php package.
 *
 * MIT License
 *
 * Copyright (c) 2022 Brandon Clothier
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

declare(strict_types=1);

$composer = json_decode(file_get_contents(__DIR__.'/composer.json'), true);

$projectName = $composer['name'];

$license = file_get_contents(__DIR__.'/LICENSE');

$headerComment = <<<COMMENT
This file is part of the {$projectName} package.

{$license}
COMMENT;

$finder = PhpCsFixer\Finder::create()
    ->notPath('vendor')
    ->name('*.php')
    ->name('.php-cs*.php')
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->ignoreVCS(true);

$config = (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PSR12' => true,
        'binary_operator_spaces' => [
            'operators' => ['=>' => null],
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'not_operator_with_successor_space' => true,
        'header_comment' => [
            'header' => $headerComment,
            'separate' => 'both',
            'location' => 'after_open',
            'comment_type' => 'PHPDoc',
        ],
        'linebreak_after_opening_tag' => true,
        'mb_str_functions' => true,
        'no_php4_constructor' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'length',
        ],
        'php_unit_strict' => true,
        'phpdoc_no_empty_return' => false,
        'phpdoc_order' => true,
        'semicolon_after_instruction' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'yoda_style' => false,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'native_function_invocation'=> false,
        'native_constant_invocation' => false,
        'declare_strict_types' => true,
        'phpdoc_to_comment' => false,
        'no_trailing_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'fopen_flags' => [
            'b_mode' => true,
        ],
        'php_unit_method_casing' => [
            'case' => 'snake_case',
        ],
    ]);

return $config->setFinder($finder);
