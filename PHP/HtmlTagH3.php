<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type h3
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type h3
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagH3 extends HtmlTagH
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagH3::__tagName()
	 * @return HtmlTagH3
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagH3::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @uses HtmlTagH::H3
	 * @return string HtmlTagH::H3
	 */
	public static function __tagName()
	{
		return HtmlTagH::H3;
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