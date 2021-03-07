<?php

class tFPDF
{
    var $unifontSubset;
    var $page;
    // current page number
    var $n;
    // current object number
    var $offsets;
    // array of object offsets
    var $buffer;
    // buffer holding in-memory PDF
    var $pages;
    // array containing pages
    var $state;
    // current document state
    var $compress;
    // compression flag
    var $k;
    // scale factor (number of points in user unit)
    var $DefOrientation;
    // default orientation
    var $CurOrientation;
    // current orientation
    var $StdPageSizes;
    // standard page sizes
    var $DefPageSize;
    // default page size
    var $CurPageSize;
    // current page size
    var $PageSizes;
    // used for pages with non default sizes or orientations
    var $wPt, $hPt;
    // dimensions of current page in points
    var $w, $h;
    // dimensions of current page in user unit
    var $lMargin;
    // left margin
    var $tMargin;
    // top margin
    var $rMargin;
    // right margin
    var $bMargin;
    // page break margin
    var $cMargin;
    // cell margin
    var $x, $y;
    // current position in user unit
    var $lasth;
    // height of last printed cell
    var $LineWidth;
    // line width in user unit
    var $fontpath;
    // path containing fonts
    var $CoreFonts;
    // array of core font names
    var $fonts;
    // array of used fonts
    var $FontFiles;
    // array of font files
    var $diffs;
    // array of encoding differences
    var $FontFamily;
    // current font family
    var $FontStyle;
    // current font style
    var $underline;
    // underlining flag
    var $CurrentFont;
    // current font info
    var $FontSizePt;
    // current font size in points
    var $FontSize;
    // current font size in user unit
    var $DrawColor;
    // commands for drawing color
    var $FillColor;
    // commands for filling color
    var $TextColor;
    // commands for text color
    var $ColorFlag;
    // indicates whether fill and text colors are different
    var $ws;
    // word spacing
    var $images;
    // array of used images
    var $PageLinks;
    // array of links in pages
    var $links;
    // array of internal links
    var $AutoPageBreak;
    // automatic page breaking
    var $PageBreakTrigger;
    // threshold used to trigger page breaks
    var $InHeader;
    // flag set when processing header
    var $InFooter;
    // flag set when processing footer
    var $ZoomMode;
    // zoom display mode
    var $LayoutMode;
    // layout display mode
    var $title;
    // title
    var $subject;
    // subject
    var $author;
    // author
    var $keywords;
    // keywords
    var $creator;
    // creator
    var $AliasNbPages;
    // alias for total number of pages
    var $PDFVersion;
    // PDF version number
    /*******************************************************************************
    *                                                                              *
    *                               Public methods                                 *
    *                                                                              *
    *******************************************************************************/
    function tFPDF($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
    }
    function SetMargins($left, $top, $right = \null)
    {
    }
    function SetLeftMargin($margin)
    {
    }
    function SetTopMargin($margin)
    {
    }
    function SetRightMargin($margin)
    {
    }
    function SetAutoPageBreak($auto, $margin = 0)
    {
    }
    function SetDisplayMode($zoom, $layout = 'default')
    {
    }
    function SetCompression($compress)
    {
    }
    function SetTitle($title, $isUTF8 = \false)
    {
    }
    function SetSubject($subject, $isUTF8 = \false)
    {
    }
    function SetAuthor($author, $isUTF8 = \false)
    {
    }
    function SetKeywords($keywords, $isUTF8 = \false)
    {
    }
    function SetCreator($creator, $isUTF8 = \false)
    {
    }
    function AliasNbPages($alias = '{nb}')
    {
    }
    function Error($msg)
    {
    }
    function Open()
    {
    }
    function Close()
    {
    }
    function AddPage($orientation = '', $size = '')
    {
    }
    function Header()
    {
    }
    function Footer()
    {
    }
    function PageNo()
    {
    }
    function SetDrawColor($r, $g = \null, $b = \null)
    {
    }
    function SetFillColor($r, $g = \null, $b = \null)
    {
    }
    function SetTextColor($r, $g = \null, $b = \null)
    {
    }
    function GetStringWidth($s)
    {
    }
    function SetLineWidth($width)
    {
    }
    function Line($x1, $y1, $x2, $y2)
    {
    }
    function Rect($x, $y, $w, $h, $style = '')
    {
    }
    function AddFont($family, $style = '', $file = '', $uni = \false)
    {
    }
    function SetFont($family, $style = '', $size = 0)
    {
    }
    function SetFontSize($size)
    {
    }
    function AddLink()
    {
    }
    function SetLink($link, $y = 0, $page = -1)
    {
    }
    function Link($x, $y, $w, $h, $link)
    {
    }
    function Text($x, $y, $txt)
    {
    }
    function AcceptPageBreak()
    {
    }
    function Cell($w, $h = 0, $txt = '', $border = 0, $ln = 0, $align = '', $fill = \false, $link = '')
    {
    }
    function MultiCell($w, $h, $txt, $border = 0, $align = 'J', $fill = \false)
    {
    }
    function Write($h, $txt, $link = '')
    {
    }
    function Ln($h = \null)
    {
    }
    function Image($file, $x = \null, $y = \null, $w = 0, $h = 0, $type = '', $link = '')
    {
    }
    function GetX()
    {
    }
    function SetX($x)
    {
    }
    function GetY()
    {
    }
    function SetY($y)
    {
    }
    function SetXY($x, $y)
    {
    }
    function Output($name = '', $dest = '', $utfName = '')
    {
    }
    /*******************************************************************************
    *                                                                              *
    *                              Protected methods                               *
    *                                                                              *
    *******************************************************************************/
    function _dochecks()
    {
    }
    function _getfontpath()
    {
    }
    function _checkoutput()
    {
    }
    function _getpagesize($size)
    {
    }
    function _beginpage($orientation, $size)
    {
    }
    function _endpage()
    {
    }
    function _loadfont($font)
    {
    }
    function _escape($s)
    {
    }
    function _textstring($s)
    {
    }
    function _UTF8toUTF16($s)
    {
    }
    function _dounderline($x, $y, $txt)
    {
    }
    function _parsejpg($file)
    {
    }
    function _parsepng($file)
    {
    }
    function _parsepngstream($f, $file)
    {
    }
    function _readstream($f, $n)
    {
    }
    function _readint($f)
    {
    }
    function _parsegif($file)
    {
    }
    function _newobj()
    {
    }
    function _putstream($s)
    {
    }
    function _out($s)
    {
    }
    function _putpages()
    {
    }
    function _putfonts()
    {
    }
    function _putTTfontwidths(&$font, $maxUni)
    {
    }
    function _putimages()
    {
    }
    function _putimage(&$info)
    {
    }
    function _putxobjectdict()
    {
    }
    function _putresourcedict()
    {
    }
    function _putresources()
    {
    }
    function _putinfo()
    {
    }
    function _putcatalog()
    {
    }
    function _putheader()
    {
    }
    function _puttrailer()
    {
    }
    function _enddoc()
    {
    }
    // ********* NEW FUNCTIONS *********
    // Converts UTF-8 strings to UTF16-BE.
    function UTF8ToUTF16BE($str, $setbom = \true)
    {
    }
    // Converts UTF-8 strings to codepoints array
    function UTF8StringToArray($str)
    {
    }
    // End of class
}