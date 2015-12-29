<?php
namespace TYPO3Fluid\Fluid\ViewHelpers;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

use TYPO3Fluid\Fluid\Core\Compiler\TemplateCompiler;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Else-Branch of a condition. Only has an effect inside of "If". See the If-ViewHelper for documentation.
 *
 * ### Examples
 *
 * #### Output content if condition is not met
 *
 * ```html
 * <f:if condition="{someCondition}">
 *   <f:else>
 *     condition was not true
 *   </f:else>
 * </f:if>
 * ```
 * Everything inside the "else" tag is displayed if the condition evaluates to FALSE.
 * Otherwise nothing is outputted in this example.
 *
 * @see TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
 * @api
 */
class ElseViewHelper extends AbstractViewHelper {

	/**
	 * @var boolean
	 */
	protected $escapeOutput = FALSE;

	/**
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerArgument('if', 'boolean', 'Condition expression conforming to Fluid boolean rules');
	}

	/**
	 * @return string the rendered string
	 * @api
	 */
	public function render() {
		return $this->renderChildren();
	}

	/**
	 * @param string $argumentsName
	 * @param string $closureName
	 * @param string $initializationPhpCode
	 * @param ViewHelperNode $node
	 * @param TemplateCompiler $compiler
	 * @return string|NULL
	 */
	public function compile($argumentsName, $closureName, &$initializationPhpCode, ViewHelperNode $node, TemplateCompiler $compiler) {
		return '\'\'';
	}

}
