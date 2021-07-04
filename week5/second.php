<?php
  if (isset($_GET['page'])) {
    $page = urldecode($_GET['page']);
    $pattern = '/^[a-zA-Z0-9\/\._\-#]+.html/'; 
    if (!preg_match($pattern, $page)) die('Illegal URL');
    $page = dirname(__FILE__) . "/" . $page;
    //if (strstr($page,"/")) header("Location: http://glossary.computing.society.informs.org/second.php");
  }
?>
<HTML>
<HEAD>
<TITLE>Mathematical Programming Glossary</TITLE>
<style type="text/css">
  div {padding-left:20px; }
</style>
<BASE Target = "second">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</HEAD>
<?php
include('style.css');
?>

<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/search-over.jpg','images/index-over.jpg','images/a-over.jpg','images/b-over.jpg','images/c-over.jpg','images/d-over.jpg','images/e-over.jpg','images/f-over.jpg','images/g-over.jpg','images/h-over.jpg','images/i-over.jpg','images/j-over.jpg','images/k-over.jpg','images/l-over.jpg','images/m-over.jpg','images/n-over.jpg','images/o-over.jpg','images/p-over.jpg','images/q-over.jpg','images/r-over.jpg','images/s-over.jpg','images/t-over.jpg','images/u-over.jpg','images/v-over.jpg','images/w-over.jpg','images/x-over.jpg','images/y-over.jpg','images/z-over.jpg')">
<BASE Target = "second">
<map name="Map">
<area shape="rect" coords="22,31,557,82" href="index.html?" target="_parent">
</map>
<map name="Map2">
<area shape="rect" coords="145,1,355,16" alt=""
        href="http://computing.society.informs.org" target="_parent">
<area shape="rect" coords="465,1,575,16" alt=""
        href="indexVer1.php?page=EditorialBoard.html" target="_parent">
</map>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<td bgcolor="#000000">

<table width="900" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td width="100%" height="150" bgcolor="#ffffff"> 

<table width="900" border=0 cellpadding=0 cellspacing=0>
<tr> 
    <td colspan=29 bgcolor="#000000" align="left" valign="top" width="100%"> 
	<img src="images/header.jpg" alt="" width="900" height=91 border="0" 
	usemap="#Map"></td>
</tr>
<tr>
    <td colspan=29 align="left" width="100%" bgcolor="#000000"> 
	<img src="images/header-02.jpg" width="802" height=17 
	usemap="#Map2" border="0" alt=""></td>
</tr>
<tr> 
    <td width="802" colspan=28 align="left" bgcolor="#000000"> 
	<img src="images/header-01.jpg" width="802" height=2 alt=""></td>
    <td width="98" rowspan=2 valign="bottom"> <img src="images/math2_03.jpg" 
	width=98 height=28 alt=""></td> </tr>
<tr> 
    <td width="71" rowspan=2> 
	<a href="indexVer1.php?page=index_page.html" 
	target="_parent"><img src="images/index.jpg" alt="" name="Image2" 
	width=71 height=27 border="0" id="Image2" 
	onMouseOver="MM_swapImage('Image2','','images/index-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="70" rowspan=2> 
	<a href="indexVer1.php?page=search.html" 
	target="_parent"><img src="images/search.jpg" alt="" name="Image1" 
	width=70 height=27 border="0" id="Image1" 
	onMouseOver="MM_swapImage('Image1','','images/search-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=A.html" 
	target="_parent"><img src="images/a.jpg" alt="" name="Image8" 
	width=25 height=26 border="0" id="Image8" 
	onMouseOver="MM_swapImage('Image8','','images/a-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=B.html" 
	target="_parent"><img src="images/b.jpg" alt="" name="Image9" 
	width=26 height=26 border="0" id="Image9" 
	onMouseOver="MM_swapImage('Image9','','images/b-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=C.html" 
	target="_parent"><img src="images/c.jpg" alt="" name="Image10" 
	width=25 height=26 border="0" id="Image10" 
	onMouseOver="MM_swapImage('Image10','','images/c-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=D.html" 
	target="_parent"><img src="images/d.jpg" alt="" name="Image11" 
	width=26 height=26 border="0" id="Image11" 
	onMouseOver="MM_swapImage('Image11','','images/d-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=E.html" 
	target="_parent"><img src="images/e.jpg" alt="" 
	name="Image12" width=25 height=26 border="0" id="Image12" 
	onMouseOver="MM_swapImage('Image12','','images/e-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
   <td width="26"> <a href="indexVer1.php?page=F.html" 
	target="_parent"><img src="images/f.jpg" alt="" 
	name="Image13" width=26 height=26 border="0" id="Image13" 
	onMouseOver="MM_swapImage('Image13','','images/f-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=G.html" 
	target="_parent"><img src="images/g.jpg" alt="" 
	name="Image14" width=25 height=26 border="0" id="Image14" 
	onMouseOver="MM_swapImage('Image14','','images/g-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=H.html" 
	target="_parent"><img src="images/h.jpg" alt="" 
	name="Image15" width=25 height=26 border="0" id="Image15" 
	onMouseOver="MM_swapImage('Image15','','images/h-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=I.html" 
	target="_parent"><img src="images/i.jpg" alt="" 
	name="Image16" width=26 height=26 border="0" id="Image16" 
	onMouseOver="MM_swapImage('Image16','','images/i-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=J.html" 
	target="_parent"><img src="images/j.jpg" alt="" 
	name="Image17" width=25 height=26 border="0" id="Image17" 
	onMouseOver="MM_swapImage('Image17','','images/j-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=K.html" 
	target="_parent"><img src="images/k.jpg" alt="" 
	name="Image18" width=26 height=26 border="0" id="Image18" 
	onMouseOver="MM_swapImage('Image18','','images/k-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=L.html" 
	target="_parent"><img src="images/l.jpg" alt="" 
	name="Image19" width=25 height=26 border="0" id="Image19" 
	onMouseOver="MM_swapImage('Image19','','images/l-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=M.html" 
	target="_parent"><img src="images/m.jpg" alt="" 
	name="Image20" width=25 height=26 border="0" id="Image20" 
	onMouseOver="MM_swapImage('Image20','','images/m-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=N.html" 
	target="_parent"><img src="images/n.jpg" alt="" 
	name="Image21" width=26 height=26 border="0" id="Image21" 
	onMouseOver="MM_swapImage('Image21','','images/n-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=O.html" 
	target="_parent"><img src="images/o.jpg" alt="" 
	name="Image22" width=25 height=26 border="0" id="Image22" 
	onMouseOver="MM_swapImage('Image22','','images/o-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=P.html" 
	target="_parent"><img src="images/p.jpg" alt="" 
	name="Image23" width=26 height=26 border="0" id="Image23" 
	onMouseOver="MM_swapImage('Image23','','images/p-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=Q.html" 
	target="_parent"><img src="images/q.jpg" alt="" 
	name="Image24" width=25 height=26 border="0" id="Image24" 
	onMouseOver="MM_swapImage('Image24','','images/q-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=R.html" 
	target="_parent"><img src="images/r.jpg" alt="" 
	name="Image25" width=26 height=26 border="0" id="Image25" 
	onMouseOver="MM_swapImage('Image25','','images/r-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=S.html" 
	target="_parent"><img src="images/s.jpg" alt="" 
	name="Image26" width=25 height=26 border="0" id="Image26" 
	onMouseOver="MM_swapImage('Image26','','images/s-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=T.html" 
	target="_parent"><img src="images/t.jpg" alt="" 
	name="Image27" width=25 height=26 border="0" id="Image27" 
	onMouseOver="MM_swapImage('Image27','','images/t-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=U.html" 
	target="_parent"><img src="images/u.jpg" alt="" 
	name="Image28" width=26 height=26 border="0" id="Image28" 
	onMouseOver="MM_swapImage('Image28','','images/u-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=V.html" 
	target="_parent"><img src="images/v.jpg" alt="" 
	name="Image29" width=25 height=26 border="0" id="Image29" 
	onMouseOver="MM_swapImage('Image29','','images/v-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=W.html" 
	target="_parent"><img src="images/w.jpg" alt="" 
	name="Image30" width=26 height=26 border="0" id="Image30" 
	onMouseOver="MM_swapImage('Image30','','images/w-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=X.html" 
	target="_parent"><img src="images/x.jpg" alt="" 
	name="Image31" width=25 height=26 border="0" id="Image31" 
	onMouseOver="MM_swapImage('Image31','','images/x-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="26"> <a href="indexVer1.php?page=Y.html" 
	target="_parent"><img src="images/y.jpg" alt="" 
	name="Image32" width=26 height=26 border="0" id="Image32" 
	onMouseOver="MM_swapImage('Image32','','images/y-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
    <td width="25"> <a href="indexVer1.php?page=Z.html" 
	target="_parent"><img src="images/z.jpg" alt="" 
	name="Image33" width=25 height=26 border="0" id="Image33" 
	onMouseOver="MM_swapImage('Image33','','images/z-over.jpg',1)" 
	onMouseOut="MM_swapImgRestore()"></a></td>
</tr>
<tr> 
    <td colspan=27> <img src="images/math2_32.jpg" 
	width=759 height=1 alt=""></td>
</tr>
<tr> 
    <td colspan=29> <img src="images/lower_bar.jpg" 
	width=900 height=28 alt=""></td>
</tr>
</table></td>
</tr>
</table></td>
<td width="100%" background="images/header-03.jpg">&nbsp;  </td>
</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td width="41" height="100%" align="left" valign="top" 
	background="images/footer_31.jpg">
        <img src="images/footer_32.jpg" width="30" height="100%"></td>
    <td> &nbsp;&nbsp;&nbsp;</td>
    <td width="100%" valign="top" bgcolor="#ffffff"> <p>&nbsp; </p>
<blockquote>
<b><blink>Note:</blink></b> This version of the glossary is obsolete and is not maintained. <br>
Please use <a href="http://glossary.computing.society.informs.org/">http://glossary.computing.society.informs.org</a>
</blockquote>
      <p>  <p>
      <div style="padding-left:20px;"> 
        <?php
	  if (isset($page)) {
        if(ereg(".htm$",$page)) // Look for .htm extension
        {      
         include $page;
        } 
        elseif(ereg(".html",$page)) // Look for .html
        { 
          include $page;
        }
		elseif(ereg(".pdf$",$page)) // Look for .htm extension
        {      
         echo "<a href = '$page'>$page</a>";
        } 
        elseif(ereg(".ps",$page)) // Look for .html
        { 
          echo "<a href = '$page'>$page</a>";
        }
        else
        {
  		echo "<img src='$page'>";
		}
	  }
	   else
	   {
	   include('intro.html');
	   }
	  ?>
	 
      </div>
<hr>
<center><font size=+2>
      <a href="second.php?page=notation.html">Notation</a>
</font></center>
<hr>
      <div style="padding:20px">

<?
$last_modified = filemtime("$page");
print("Last updated:  ");
print(date("l, F j, Y ", $last_modified));
?>
        <br>Send questions and comments to 
<a href="mailto:icsMPGlossary@mail.informs.org">
	icsMPGlossary@mail.informs.org</a>. 
        <br>
	View the INFORMS Computing Society's
	<a href="indexVer1.php?page=EditorialBoard.html">Editorial Board</a>
 	<br>
        Copyright<sup><big>&#169;</big></sup> 1996 &#8211; 2014, 
   Mathematical Programming Glossary, by the
     <a href="http://computing.society.informs.org/" target="_parent">
	INFORMS Computing Society</a> </div></td>
    <td width="1">&nbsp;</td>
  </tr>
</table>
</BODY>
</HTML>
