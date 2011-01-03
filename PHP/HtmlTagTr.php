<?php
/**
 * Classe m�re permettant de g�n�rer des lignes d'un tableau HtmlTag
 * Root class to generate a tr element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
/**
 * Classe m�re permettant de g�n�rer des lignes d'un tableau HtmlTag
 * Root class to generate a tr element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
class HtmlTagTr extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTr::__tagName()
	 * @return HtmlTagTr
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTr::__tagName());
	}
	/**
	 * M�thode permettant d'ajouter une cellule � la ligne
	 * Method to add a table cell
	 *
	 * @uses HtmlTag::addValue()
	 * @param HtmlTagTableCell
	 */
	public function addCell(HtmlTagTableCell $_HtmlTagTableCell)
	{
		return $this->addValue($_HtmlTagTableCell);
	}
	/**
	 * M�thode permettant de facilement cr�er une cellule pour la ligne en cours
	 * Method to create a cell
	 *
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::addAttributes()
	 * @uses HtmlTagTableCell::TD
	 * @uses HtmlTagTr::addCell()
	 * @param mixed le contenu de la cellule / cell innerHTML
	 * @param array les attributs � appliquer � la cellule / array of cell attributes
	 * @param string type de la cellule (TH,TD) / cell type (th or td)
	 */
	public function createCell($_content, $_attributes = null, $_cellType = HtmlTagTableCell::TD)
	{
		$htmlCell = new HtmlTagTableCell($_cellType);
		$htmlCell->setValue($_content);
		if(is_array($_attributes))
			$htmlCell->addAttributes($_attributes);
		return $this->addCell($htmlCell);
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string tr
	 */
	public static function __tagName()
	{
		return 'tr';
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