<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type em
 * Root class to generate an em element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type em
 * Root class to generate an em element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagEm extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagEm::__tagName()
	 * @return HtmlTagEm
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagEm::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string em
	 */
	public static function __tagName()
	{
		return 'em';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>