<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type dfn
 * Root class to generate a dfn element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type dfn
 * Root class to generate a dfn element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagDfn extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagDfn::__tagName()
	 * @return HtmlTagDfn
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagDfn::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string dfn
	 */
	public static function __tagName()
	{
		return 'dfn';
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