<?php

class TTFontFile
{
    var $maxUni;
    var $_pos;
    var $numTables;
    var $searchRange;
    var $entrySelector;
    var $rangeShift;
    var $tables;
    var $otables;
    var $filename;
    var $fh;
    var $hmetrics;
    var $glyphPos;
    var $charToGlyph;
    var $ascent;
    var $descent;
    var $name;
    var $familyName;
    var $styleName;
    var $fullName;
    var $uniqueFontID;
    var $unitsPerEm;
    var $bbox;
    var $capHeight;
    var $stemV;
    var $italicAngle;
    var $flags;
    var $underlinePosition;
    var $underlineThickness;
    var $charWidths;
    var $defaultWidth;
    var $maxStrLenRead;
    function TTFontFile()
    {
    }
    function getMetrics($file)
    {
    }
    function readTableDirectory()
    {
    }
    function sub32($x, $y)
    {
    }
    function calcChecksum($data)
    {
    }
    function get_table_pos($tag)
    {
    }
    function seek($pos)
    {
    }
    function skip($delta)
    {
    }
    function seek_table($tag, $offset_in_table = 0)
    {
    }
    function read_tag()
    {
    }
    function read_short()
    {
    }
    function unpack_short($s)
    {
    }
    function read_ushort()
    {
    }
    function read_ulong()
    {
    }
    function get_ushort($pos)
    {
    }
    function get_ulong($pos)
    {
    }
    function pack_short($val)
    {
    }
    function splice($stream, $offset, $value)
    {
    }
    function _set_ushort($stream, $offset, $value)
    {
    }
    function _set_short($stream, $offset, $val)
    {
    }
    function get_chunk($pos, $length)
    {
    }
    function get_table($tag)
    {
    }
    function add($tag, $data)
    {
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////
    function extractInfo()
    {
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////
    function makeSubset($file, &$subset)
    {
    }
    //////////////////////////////////////////////////////////////////////////////////
    // Recursively get composite glyph data
    function getGlyphData($originalGlyphIdx, &$maxdepth, &$depth, &$points, &$contours)
    {
    }
    //////////////////////////////////////////////////////////////////////////////////
    // Recursively get composite glyphs
    function getGlyphs($originalGlyphIdx, &$start, &$glyphSet, &$subsetglyphs)
    {
    }
    //////////////////////////////////////////////////////////////////////////////////
    function getHMTX($numberOfHMetrics, $numGlyphs, &$glyphToChar, $scale)
    {
    }
    function getHMetric($numberOfHMetrics, $gid)
    {
    }
    function getLOCA($indexToLocFormat, $numGlyphs)
    {
    }
    // CMAP Format 4
    function getCMAP4($unicode_cmap_offset, &$glyphToChar, &$charToGlyph)
    {
    }
    // Put the TTF file together
    function endTTFile(&$stm)
    {
    }
}