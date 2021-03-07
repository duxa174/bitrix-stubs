<?php

function GetDefaultProlog($title)
{
}
function GetDefaultEpilog()
{
}
function PathToWF($text, $DOCUMENT_ID)
{
}
function convert_image($img = "", $query = "", $param = "")
{
}
function WFToPath($text)
{
}
function SavePreviewContent($abs_path, $strContent)
{
}
//http://en.wikipedia.org/wiki/Longest_common_subsequence_problem
//function  LCS(X[1..m], Y[1..n])
function LongestCommonSubsequence($X, $Y)
{
}
//function printDiff(C[0..m,0..n], X[1..m], Y[1..n], i, j)
//	if i > 0 and j > 0 and X[i] = Y[j]
//		printDiff(C, X, Y, i-1, j-1)
//		print "  " + X[i]
//	else
//		if j > 0 and (i = 0 or C[i,j-1] >= C[i-1,j])
//			printDiff(C, X, Y, i, j-1)
//			print "+ " + Y[j]
//		else if i > 0 and (j = 0 or C[i,j-1] < C[i-1,j])
//			printDiff(C, X, Y, i-1, j)
//			print "- " + X[i]
function printDiff($C, $X, $Y, $Xt, $Yt, $i, $j)
{
}
function getDiff($X, $Y)
{
}