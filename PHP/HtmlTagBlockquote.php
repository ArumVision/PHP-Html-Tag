<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type blockquote
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type blockquote
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagBlockquote extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagBlockquote::__tagName()
	 * @return HtmlTagBlockquote
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagBlockquote::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string blockquote
	 */
	public static function __tagName()
	{
		return 'blockquote';
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