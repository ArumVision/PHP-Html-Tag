<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des options d'un select HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des options d'un select HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagOption extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagOption::__tagName()
	 * @uses HtmlTag::setValue()
	 * @return HtmlTagOption
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagOption::__tagName());
	}
	/**
	 * M�thode permettant de d�finir la valeur de l'attribut value de l'option
	 * 
	 * @uses HtmlTag::addAttribute()
	 * @param scalar la valeur
	 * @return bool true|false
	 */
	public function setValAttr($_value)
	{
		return $this->addAttribute('value',$_value,true);
	}
	/**
	 * M�thode permettant d'indiquer que l'option est s�l�ctionn�e
	 *
	 * @uses HtmlTag::addAttribute
	 * @uses HtmlTagOption::unsetSelected
	 * @param bool selected
	 * @return bool true|false
	 */
	public function setSelected($_selected = true)
	{
		return $_selected?$this->addAttribute('selected','selected',true):$this->unsetSelected();
	}
	/**
	 * M�thode permettant de d'indiquer que l'option n'est plus s�lectionn�e
	 * 
	 * @uses Htmltag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetSelected()
	{
		return $this->unsetAttribute('selected');
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string option
	 */
	public static function __tagName()
	{
		return 'option';
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