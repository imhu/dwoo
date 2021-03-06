<?php
namespace Dwoo\Plugins\Functions;
use Dwoo\Compiler;

/**
 * Counts the paragraphs in a string
 * <pre>
 *  * value : the string to process
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     David Sanchez <david38sanchez@gmail.com>
 * @copyright  Copyright (c) 2014, David Sanchez
 * @license    http://dwoo.org/LICENSE   Modified BSD License
 * @link       http://dwoo.org/
 * @version    2.0
 * @date       2013-09-04
 * @package    Dwoo
 */
function functionCountParagraphsCompile(Compiler $compiler, $value) {
	// count \r or \n characters
	return '(preg_match_all(\'([^\n]*\n+)\', ' . $value . ', $tmp)+1)';
}