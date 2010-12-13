<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer un �l�ment ul/ol HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer un �l�ment ul/ol HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagUl extends HtmlTagList
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagUl::__tagName()
	 * @return HtmlTagUl
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagUl::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * 
	 * @uses HtmlTagList::UL
	 * @return string HtmlTagList::UL
	 */
	public static function __tagName()
	{
		return HtmlTagList::UL;
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