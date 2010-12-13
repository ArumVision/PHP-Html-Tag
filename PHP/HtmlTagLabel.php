<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type label
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type label
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagLabel extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagLabel::__tagName()
	 * @return HtmlTagLabel
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagLabel::__tagName());
	}
	/**
	 * M�thode permettant de d�finir la valeur de l'attribut for
	 * 
	 * @uses HtmlTag::addAttribute()
	 * @param string
	 * @return bool true|false
	 */
	public function setFor($_for)
	{
		return is_string($_for)?$this->addAttribute('for',$_for,true):false;
	}
	/**
	 * M�thode permettant de supprimer l'attribut for
	 * 
	 * @uses HtmlTag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetFor()
	{
		return $this->removeAttribute('for');
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string label
	 */
	public static function __tagName()
	{
		return 'label';
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