<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type abbr
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type abbr
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
class HtmlTagAbbr extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagAbbr::__tagName()
	 * @return HtmlTagAbbr
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagAbbr::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string abbr
	 */
	public static function __tagName()
	{
		return 'abbr';
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