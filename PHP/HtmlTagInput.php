<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type input
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 19/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type input
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 19/12/2009
 */
class HtmlTagInput extends HtmlTag
{
	/**
	 * Nom du type text
	 * @var string
	 */
	const TEXT = 'text';
	/**
	 * Nom du type password
	 * @var string
	 */
	const PASSWORD = 'password';
	/**
	 * Nom du type hidden
	 * @var string
	 */
	const HIDDEN = 'hidden';
	/**
	 * Nom du type image
	 * @var string
	 */
	const IMAGE = 'image';
	/**
	 * Nom du type button
	 * @var string
	 */
	const BUTTON = 'button';
	/**
	 * Nom du type submit
	 * @var string
	 */
	const SUBMIT = 'submit';
	/**
	 * Nom du type checkbox
	 * @var string
	 */
	const CHECKBOX = 'checkbox';
	/**
	 * Nom du type file
	 * @var string
	 */
	const FILE = 'file';
	/**
	 * Nom du type radio
	 * @var string
	 */
	const RADIO = 'radio';
	/**
	 * Nom du type reset
	 * @var string
	 */
	const RESET = 'reset';
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagInput::__tagName()
	 * @uses HtmlTagInput::setType()
	 * @uses HtmlTagInput::__className()
	 * @param string type du champ
	 * @return HtmlTagInput
	 */
	public function __construct($_inputType = self::TEXT)
	{
		if(is_string($_inputType) && defined(HtmlTagInput::__className() . '::' . strtoupper($_inputType)))
		{
			parent::__construct(HtmlTagInput::__tagName());
			$this->setType($_inputType);
		}
	}
	/**
	 * M�thode permettant d'indiquer que l'�l�ment de type checkbox est coch�
	 * 
	 * @uses Htmltag::addAttribute()
	 * @uses HtmltagInput::isBool()
	 * @uses HtmltagInput::unsetChecked()
	 * @param bool checked
	 * @return bool true|false
	 */
	public function setChecked($_checked = true)
	{
		return $this->isBool()?($_checked?$this->addAttribute('checked','checked',true):$this->unsetChecked()):false;
	}
	/**
	 * M�thode permettant d'indiquer que l'�l�ment de type checkbox n'est pas coch�
	 * 
	 * @uses Htmltag::removeAttribute()
	 * @uses HtmltagInput::isBool()
	 * @return bool true|false
	 */
	public function unsetChecked()
	{
		return $this->isBool()?$this->removeAttribute('checked'):false;
	}
	/**
	 * M�thode permettant de savoir si le champ est de type bool�en ou non (checkbox, radio)
	 * 
	 * @uses HtmlTagInput::getType()
	 * @uses HtmlTagInput::CHECKBOX
	 * @uses HtmlTagInput::RADIO
	 * @return bool true|false
	 */
	public function isBool()
	{
		return in_array($this->getType(),array(HtmlTagInput::CHECKBOX,HtmlTagInput::RADIO));
	}
	/**
	 * Permet de v�rifier le type de l'�l�ment
	 * @see parent::setType()
	 * 
	 * @uses HtmlTagInput::__className()
	 * @uses HtmlTagInput::setType()
	 * @param string le type
	 * @return bool true|false
	 */
	public function setType($_type)
	{
		return (is_string($_type) && defined(HtmlTagInput::__className() . '::' . strtoupper($_type)))?parent::setType($_type):false;
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string input
	 */
	public static function __tagName()
	{
		return 'input';
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