<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type dd
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type dd
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagDd extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagDd::__tagName()
	 * @return HtmlTagDd
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagDd::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string dd
	 */
	public static function __tagName()
	{
		return 'dd';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>