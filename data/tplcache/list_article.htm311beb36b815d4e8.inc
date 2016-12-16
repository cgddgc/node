<?php
$z[0]=Array("field","",220,239);
$z[0][4]['name']="title";
$z[1]=Array("global","",240,266);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",307,336);
$z[2][4]['name']="keywords";
$z[3]=Array("field","",376,434);
$z[3][4]['name']="description";
$z[3][4]['function']="html2text(@me)";
$z[4]=Array("include","",1064,1099);
$z[4][4]['filename']="head.htm";
$z[5]=Array("channel","\r\n        <li><a href='[field:typeurl/]'>[field:typename/]</a></li>\r\n        ",1626,1743);
$z[5][4]['type']="son";
$z[6]=Array("field","",1809,1838);
$z[6][4]['name']="position";
$z[7]=Array("field","",2095,2124);
$z[7][4]['name']="typename";
$z[8]=Array("list","\r\n      <figure class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">\r\n        <article class=\"ny-news\"><a href=\"[field:arcurl/]\" title=\"[field:title/]\" target=\"_blank\" class=\"pull-left pic-link visible-lg\"><span class=\"case-hover\"><span class=\"hover-link\"></span></span><img src=\"[field:picname/]\" class=\"ylw-img-responsive2\" alt=\"[field:title/]\"/></a>\r\n          <h4><a href=\"[field:arcurl/]\" title=\"[field:title/]\" target=\"_blank\">[field:title/]</a></h4>\r\n          <p>[field:description function=\"cn_substr(@me,160)\"/]...</p>\r\n          <p><span class=\"fl\"><a href='[field:typeurl/]'>[field:typename/]</a></span><span class=\"gz\">[field:click/]</span><span class=\"sj\">[field:pubdate function=\"MyDate('Y-m-d',@me)\"/]</span></p>\r\n        </article>\r\n      </figure>\r\n      ",2689,3492);
$z[8][4]['pagesize']="6";
$z[9]=Array("pagelist","",3591,3662);
$z[9][4]['listitem']="info,index,end,pre,next,pageno";
$z[9][4]['listsize']="5";
$z[10]=Array("include","",3762,3799);
$z[10][4]['filename']="footer.htm";

?>