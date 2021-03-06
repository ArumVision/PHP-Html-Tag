<?php
/**
 * Classe m�re permettant de g�n�rer des tableaux HtmlTag
 * Root class to generate a table element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
/**
 * Classe m�re permettant de g�n�rer des tableaux HtmlTag
 * Root class to generate a table element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
class HtmlTagTable extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTable::__tagName()
	 * @return HtmlTagTable
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTable::__tagName());
	}
	/**
	 * M�thode pour d�finir le caption du tableau
	 * Method to set caption element
	 * 
	 * @uses Htmltag::addvalue()
	 * @param HtmlTag
	 */
	public function setCaption(HtmlTagCaption $_caption)
	{
		return $this->addvalue($_caption);
	}
	/**
	 * M�thode pour d�finir le tbody du tableau
	 * Method to set tbody element
	 * 
	 * @uses Htmltag::addvalue()
	 * @param HtmlTagTableTPart
	 */
	public function setTbody(HtmlTagTbody $_tbody)
	{
		return $this->addvalue($_tbody);
	}
	/**
	 * M�thode pour d�finir le tfoot du tableau
	 * Method to set tfoot element
	 * 
	 * @uses Htmltag::addvalue()
	 * @param HtmlTagTableTPart
	 */
	public function setTfoot(HtmlTagTfoot $_tfoot)
	{
		return $this->addvalue($_tfoot);
	}
	/**
	 * M�thode pour d�finir le thead du tableau
	 * Method to set thead element
	 * 
	 * @uses Htmltag::addvalue()
	 * @param HtmlTagTableTPart
	 */
	public function setThead(HtmlTagThead $_thead)
	{
		return $this->addvalue($_thead);
	}
	/**
	 * M�thode de d�finition de la valeur du cellpadding
	 * Method to set cellpadding attribute
	 * 
	 * @uses Htmltag::addAttribute()
	 * @param int valeur
	 * @return bool true|false
	 */
	public function setCellpadding($_cellpadding)
	{
		return $this->addAttribute('cellpadding',intval($_cellpadding),true);
	}
	/**
	 * M�thode permettant de supprimer l'attribut cellpadding
	 * Method to unset cellpadding attribute
	 * 
	 * @uses Htmltag::unsetAttribute()
	 * @return bool true|false
	 */
	public function unsetCellpadding()
	{
		return $this->unsetAttribute('cellpadding');
	}
	/**
	 * M�thode de d�finition de la valeur du cellspacing
	 * Method to set cellspacing attribute
	 * 
	 * @uses Htmltag::addAttribute()
	 * @param int valeur
	 * @return bool true|false
	 */
	public function setCellspacing($_cellspacing)
	{
		return $this->addAttribute('cellspacing',intval($_cellspacing),true);
	}
	/**
	 * M�thode permettant de supprimer l'attribut cellspacing
	 * Method to unset cellspacing attribute
	 * 
	 * @uses Htmltag::unsetAttribute()
	 * @return bool true|false
	 */
	public function unsetCellspacing()
	{
		return $this->unsetAttribute('cellspacing');
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string table
	 */
	public static function __tagName()
	{
		return 'table';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>