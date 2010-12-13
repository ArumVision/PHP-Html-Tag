<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type td
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type td
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagTd extends HtmlTagTableCell
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTd::__tagName()
	 * @return HtmlTagTd
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTd::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @uses HtmlTagTableCell::TD
	 * @return string HtmlTagTableCell::TD
	 */
	public static function __tagName()
	{
		return HtmlTagTableCell::TD;
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