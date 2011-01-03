<?php
/**
 * Classe m�re permettant de g�n�rer des cellules d'une ligne d'un tableau HtmlTag
 * Root class to generate a table cell element as td or th
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
/**
 * Classe m�re permettant de g�n�rer des cellules d'une ligne d'un tableau HtmlTag
 * Root class to generate a table cell element as td or th
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
class HtmlTagTableCell extends HtmlTag
{
	/**
	 * Nom du tag pour une cellule du thead du tableau
	 * Tag name for a thead cell
	 * @var string
	 */
	const TH = 'th';
	/**
	 * Nom du tag pour une cellule du tbody/tfoot du tableau
	 * Tag name for a tbody/tfoot cell
	 * @var string
	 */
	const TD = 'td';
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 *
	 * @uses HtmlTagTableCell::__className()
	 * @param string type de la cellule / type of he cell (th or td)
	 * @return HtmlTagTableCell
	 */
	public function __construct($_cellType = self::TD)
	{
		if(is_string($_cellType) && defined(HtmlTagTableCell::__className() . '::' . strtoupper($_cellType)))
			parent::__construct($_cellType);
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'colspan' de l'�l�ment HtmlTag
	 * Method to set colspan attribute value
	 *
	 * @uses HtmlTagTableCell::addAttribute()
	 * @param string la valeur de colspan
	 * @return bool true|false
	 */
	public function setColspan($_colspan)
	{
		return $this->addAttribute('colspan',$_colspan,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'colspan' de l'�l�ment HtmlTag
	 * Method to get colspan attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getColspan()
	{
		return $this->getAttribute('colspan');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'colspan' de l'�l�ment HtmlTag
	 * Method to unset colspan attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetColspan()
	{
		return $this->unsetAttribute('colspan');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'rowspan' de l'�l�ment HtmlTag
	 * Method to set rowspan attribute value
	 *
	 * @uses HtmlTagTableCell::addAttribute()
	 * @param string la valeur de rowspan
	 * @return bool true|false
	 */
	public function setRowspan($_rowspan)
	{
		return $this->addAttribute('rowspan',$_rowspan,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'rowspan' de l'�l�ment HtmlTag
	 * Method to get rowspan attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getRowspan()
	{
		return $this->getAttribute('rowspan');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'rowspan' de l'�l�ment HtmlTag
	 * Method to unset rowspan attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetRowspan()
	{
		return $this->unsetAttribute('rowspan');
	}
	/**
	 * Gestion des particuliers d'attributs
	 * Specific cases management
	 * @see HtmlTag::addAttribute()
	 *
	 * @param string nom de l'attribut
	 * @param scalar valeur de l'attribut / attribte value
	 * @param bool appel depuis une m�thode de HtmlTag pour d�finir un attribut sp�cifique / true if the method calling is the attribute method
	 * @return bool true|false
	 */
	public function addAttribute($_attributeName, $_attributeValue, $_specificAttributeMethodCall = false)
	{
		switch ($_attributeName)
		{
			case 'colspan':
			case 'rowspan':
				return parent::addAttribute($_attributeName,intval($_attributeValue),$_specificAttributeMethodCall);
				break;
			default:
				return parent::addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall);
				break;
		}
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the list of possible tag names
	 *
	 * @uses HtmlTagTableCell::TH
	 * @uses HtmlTagTableCell::TD
	 * @return string HtmlTagTableCell::TH . '|' . HtmlTagTableCell::TD
	 */
	public static function __tagName()
	{
		return HtmlTagTableCell::TH . '|' . HtmlTagTableCell::TD;
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