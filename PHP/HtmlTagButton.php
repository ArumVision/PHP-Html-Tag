<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type button
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 14/12/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type button
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 14/12/2010
 */
class HtmlTagButton extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagButton::__tagName()
	 * @return HtmlTagButton
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagButton::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string bdo
	 */
	public static function __tagName()
	{
		return 'button';
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