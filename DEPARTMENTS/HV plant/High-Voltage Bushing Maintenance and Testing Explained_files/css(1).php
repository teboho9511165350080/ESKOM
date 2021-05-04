@charset "UTF-8";
/* CSS Document */

/*widget*/

.widget_content {
	color: #3e3e3e;
	-moz-border-radius:0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
	background:transparent url(images/gradients/gradient-black-down123.png) repeat-x  ;
	border:0px none #DADADA;
	_background-image: none;
	padding:0px;
}

.widget_content a {
	color: #444;
}

.widget_content a:hover {
	color: #006699;
}

.widget_content .meta {
	font-size:0.9em;
}

.widget_content .meta.activitystream {
	word-wrap: break-word;
}

.widget_post_bit {
	border-top: 1px dotted #C9C9C9;
	clear:both;
	padding-bottom: 2px;
}

.cms_widget.activitystream .widget_post_bit,
ul.activitystream .widget_post_bit {
	min-height: 35px;
}

.widget_post_bit:first-child {
	border-top: 0;
}

.widget_post_header {
	font:normal normal normal 1.25em 'Oswald',Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 5px 0;
	margin: 0;
}

.widget_post_header a {
	word-wrap: break-word;
	width: 100%;
	display: block;
}

.widget_post_content {
	padding: 1px 0;
	margin: 0;
	font-size: 1em;
	color: #3e3e3e;
}

.widget_post_userinfo {
	padding: 1px 0;
	margin: 0;
	position: relative;
}

.widget_post_useravatar {
	position: absolute;
	top: 5px;
	left:0;
}

.cms_widget .widget_post_useravatar img,
.block .widget_post_useravatar img {
	width: 40px;
	max-width: 40px !important;
	height: auto;
}

.widget_post_comment {
	margin-left: 50px; 
	font-size: 0.9em;
}

.widget_post_comment_noavatar {
	margin-left: 0;
	font-size: 1em;
}

.widget_post_comment .widget_post_content {
	overflow: hidden;
}

.widget_views {
	padding: 1px 0;
	margin: 0;
	text-align: right;
}

/* ------------------- */
.body_wrapper {
	background: transparent none   ;
}

.cms_toc_container .popupbody {
	text-align: left;
	left:-50px;
}

/* WIDGETS */
/* general widget styles */
.cms_widget {
	_padding:0;
	overflow: hidden;
	display:block;
	width: 100%;
	clear:both;
	background-color:#ffffff;
	border:0px none #ccc;
	-moz-border-radius:0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;

	-moz-box-shadow:-2px 2px 2px #fff;
	-webkit-box-shadow:-2px 2px 2px #fff;
	box-shadow:-2px 2px 2px #fff;

}
.none {
	display: none;
	clear:both;
}
.viewall {
	clear:both;
	float: right;
	margin: 10px; 0;
}
ul.widget_list > li {
	margin: 15px 0px 0px 0px;
}
ul.widget_list > li:first-child {
	margin-top: 0;
}
.cms_widget:first-child {
	margin-top: 0;
}
.cms_widget .block {
	_margin-bottom:4px;
	padding:6px;
	background:transparent url(images/misc/blog/top-highlight.png) repeat-x left top;
	-moz-border-radius-topleft:0px;
	-moz-border-radius-topright:0px;
	-webkit-border-top-left-radius: 0px;
	-webkit-border-top-right-radius: 0px;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
}
.cms_widget_header {
	padding-top:0;
}
.cms_widget_header h3 {
	color: #393939;
	background:transparent none;
	padding: 0px 6px 2px 6px;
	border:none;
	outline:none;
	font-size:12px;
	font-weight: bold;
}

.cms_widget_header h3 img {
	position: relative;
	top: 2px;
}

/* section navigation widget */
/* START VB Tree-Menu Implementation of YUI TreeView */
/* VB Tree-Menu of YUI TreeView Custom Styles for Content Pages */

.vb-tree-menu .ygtvtn, .vb-tree-menu .ygtvdepthcell, .vb-tree-menu table .ygtvln {
	background-image:none;
}
.vb-tree-menu .ygtvtp, .vb-tree-menu .ygtvlp {
	background:url('images/misc/trees/plus-off.png') left center no-repeat;
	border-bottom: 1px solid #dadada;
}
.vb-tree-menu .ygtvtph, .vb-tree-menu .ygtvlph {
	background:url('images/misc/trees/plus-on.png') left center no-repeat;
	border-bottom: 1px solid #dadada;
}

.vb-tree-menu .ygtvtm, .vb-tree-menu .ygtvlm  {
	background:url('images/misc/trees/minus-off.png') left center no-repeat;
	border-bottom: 1px solid #dadada;
}

.vb-tree-menu .ygtvtmh, .vb-tree-menu .ygtvlmh {
	background:url('images/misc/trees/minus-on.png') left center no-repeat;
	border-bottom: 1px solid #dadada;
}

.vb-tree-menu .ygtvtable {
	width:100%;
}

.vb-tree-menu .ygtvtp,
.vb-tree-menu .ygtvtph,
.vb-tree-menu .ygtvtm,
.vb-tree-menu .ygtvtmh,
.vb-tree-menu .ygtvlm,
.vb-tree-menu .ygtvlmh,
.vb-tree-menu .ygtvlp,
.vb-tree-menu .ygtvlph {
	background-position:0px 4px;
}

.vb-tree-menu .activeVBMenuItem {
	padding-right:0;
}

.vb-tree-menu .ygtvitem {
	font:   normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	background-color:#f5f5f5;
	border-bottom: 1px solid #ffffff;
}

.vb-tree-menu .ygtvitem a {
	color: #425769;
}

tr.ygtvrow td {
	border-bottom: 1px solid #dadada;
}

tr.ygtvrow:hover {
	width: 100%;
	border-bottom: 1px solid #f7f7f7;
}

tr.ygtvrow:hover td {
	background-color:#e1e1e1;
	border-bottom: 1px solid #f7f7f7;
}

tr.ygtvrow:hover td.ygtvcontent {
	background: #e1e1e1 url(images/cms/hover_arrow-right.png) right 50% no-repeat;
}

.vb-tree-menu .ygtvitem a.ygtvlabel {
    display:block;
    padding: 2px 0;
    padding-right:0;
    padding-left:5px;
    margin: 1px;
    background-color: transparent;
}

.vb-tree-menu .ygtvitem a.ygtvlabel:hover{
	color: #425769;
	background-color: transparent;
	text-decoration: none;
}

.vb-tree-menu .ygtvfocus{
	background-color:transparent;
}

.vb-tree-menu .ygtvfocus .ygtvlabel,
.vb-tree-menu .ygtvfocus .ygtvlabel:link,
.vb-tree-menu .ygtvfocus .ygtvlabel:visited,
.vb-tree-menu .ygtvfocus .ygtvlabel:hover{
	background-color:transparent;
}

.vb-tree-menu .activeVBMenuItem {
	background-color:#e1e1e1;
}

.vb-tree-menu .activeVBMenuItem .active .ygtvlabel {
	font-weight: bold;
}

/* this rule shouldn't work in IE6, but that's OK */

.vb-tree-menu .activeVBMenuItem>.active .ygtvlabel,
.vb-tree-menu .activeVBMenuItem>.active .ygtvlabel:link,
.vb-tree-menu .activeVBMenuItem>.active .ygtvlabel:visited,
.vb-tree-menu .activeVBMenuItem>.active .ygtvlabel:hover {
	background-color:#e1e1e1;
	font-weight:bold;
}
/* Not used? if a tree menu doesn't break remove
.vb-tree-menu ul li {
	background-color:#eee;
	font-weight:bold;
	font-size:.8em;
}

.vb-tree-menu ul li a {
	display:none;
	padding:3px 0px 3px 5px;
}

.vb-tree-menu ul li a:hover {
	color:white;
	background-color:#444488;
}

.vb-tree-menu ul.active_branch {
	padding-left:0px;
}

.vb-tree-menu ul li.sibling_active li {
	padding-left:20px;
}

.vb-tree-menu ul li.sibling_active a {
	display:block;
}

.vb-tree-menu ul li.active a {
	border:0px;
	_border-right:5px solid #900;
}

.vb-tree-menu ul li.sibling_active li a {
	display:none;
	border:none;
}

.vb-tree-menu ul li.sibling_active li.direct_child_active a {
	display:block;
}

.vb-tree-menu ul li.sibling_active li.direct_child_active li a {
	display:none;
}
/*
/* no script nav widgets */
.main_menuitem, .active_menuitem {
	margin: 0;
	display:block;
	text-align: left;
	background:#f5f5f5 none   ;
	color:#425769;
	font:  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	border-bottom: 1px solid #ffffff;
}
.main_menuitem:hover, .active_menuitem:hover {
	display:block;
	color:#425769;
        text-decoration:none;
	margin: 0;
	border-bottom: 1px solid #f7f7f7;
}
.main_menuitem a, .active_menuitem a {
	border-bottom: 1px solid #dadada;
 	display:block;
	color:#425769;
	padding:3px 4px;
	text-align: left;
	margin:0;
	text-decoration:none;
	word-wrap: break-word;
}
.main_menuitem a:hover, .active_menuitem a:hover {
	margin:0;
	color:#425769;
	text-decoration:none;
 	display:block;
	background:#e1e1e1  url(images/cms/hover_arrow-right.png) right no-repeat;
	border-bottom: 1px solid #d0d0d0;
}

.active_menuitem {
        background:#e1e1e1;
	font-weight: bold;

}
.active_menuitem:hover {
	font-weight: bold;

}
.active_menuitem a {
        background:#e1e1e1;
}

.category_widget .active_menuitem a, .category_widget .main_menuitem a {
	padding-left: 1.75em;
}

/*poll widget*/
.pollbar1,
.pollbar2,
.pollbar3,
.pollbar4,
.pollbar5,
.pollbar6 {
	height:15px;
        border:0px  transparent;
	display:inline-block;
}

.pollbar1 {
	background:rgb(156,255,198) none   ;
}

.pollbar2 {
	background:rgb(255,132,132) none   ;
}

.pollbar3 {
	background:rgb(132,132,255) none   ;
}

.pollbar4 {
	background:rgb(255,231,132) none   ;
}

.pollbar5 {
	background:rgb(255,132,255) none   ;
}

.pollbar6 {
	background:rgb(132,255,255) none   ;
}

.polloption {
font-size: 1em;
}

.polloption label {
float: none;
font-weight: normal;
}

/* calendar widget */
.calendar_widget {
	padding: 0;
}

.calendarheader {
	font:   bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	background: #ffffff url(images/gradients/gradient-black-down.png) repeat-x  ;
	padding: 5px 0;
	text-align: center;
}

.calendarsubheader {
	font:   normal 9.5px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	background: #e9e9e9 none   ;
	border-bottom: 1px solid #6B91AB;
	padding: 5px 0;
}

.calendarday {
	font:   normal 9.5px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	text-align: center;
	padding: 3px 0;
}

/* removed the widget rules since added overlay.css in the list of stylesheets */

/* -------------------------- */
/* PAGES */
.header, .article_title {
	font:   normal 2em 'Oswald', arial, sans-serif, verdana;
	color: #252525;
	border-top:0 none ;
	line-height:normal;
	margin: 0px 0px 12px 0px;
}

.header {
	border-bottom:3px solid #006699;
	text-decoration:none;
	padding:5px 0px 5px 0px;
	clear:both;
}

.vbcms_content {
	margin:0.5em 0 1em;
	width: 100%;
	float: left;
}

a.view_all {
	font-weight:bold;
	text-decoration: underline;
}

tr.bold {
    font-weight:bold;
}

/* Article Classes */
.cms_clear {
	clear:both;
}
.cms_article_title {
	margin-bottom:0px;
}
.article_username_container {
	width: 50%;
	float: left;
	clear: right;
	margin-top: 3px;
}
.article_username_container_full {
	width: 100%;
	float: left;
/*	clear: right;*/
	margin-top: 3px;
}
.article_username_container_notfull {
 width: 50%;
 float: left;
 clear: right;
 margin-top: -13px;

}
.article_rating_container {
	width: 45%;
	float: right;
	clear: right;
	margin-top: 3px;
	text-align: right;
}
.article_tags span, .article_tags ul {
	display: inline-block;
}
.cmslinks {
	padding: 0 0 10px;
	text-align: left;
	color: #5d5d5d;
	font-size: 0.8em;
        clear:both;
}

div.article_preview {
	padding: 4px;
	float: left;
	width: 98%;
	text-decoration:none;
	line-height:normal;
	margin-bottom:4px;
	color: #151515;
	background: transparent none   ;
}

h3.article_preview {
	margin:5px 0 0;
	font:  normal 1.5em 'Oswald',Tahoma,Calibri,Verdana,Geneva,sans-serif;
	text-decoration:none;
}
h3.article_preview a {
	display:inline;
}
.editimage {
	display:inline;
	border-style:none;
}
.article_preview_contents {
	padding-top: 10px;
}

.article_preview_contents ul > li, .article ul > li {
	list-style:disc inside; /* keeps the bullets from going inside the preview image */
}


.cms_article_preview_image,
.showpreviewonly object,
.showpreviewonly iframe {
	border:3px solid #ffffff;
	outline: 1px solid #c8c8c8;
	float:left;
	margin:20px 10px 5px 0px;
}

.showpreviewonly object,
.showpreviewonly iframe {
	width: 206px; height: 170px;;
}

.article_title {
	padding: 5px 0 0;
}

.article {
	font:    1em sans-serif,Arial,Tahoma,Calibri,Verdana,Geneva;
	color: #151515;
}

.article ul, .article ol, .article dl {
	margin:0 40px;
}

.article_author_date_comment_container {
	width: 100%;
	clear:both;
	float: left;
	border-bottom:3px solid #006699;
	margin-bottom: 14px;
}
.article_username_container .article_username {
	width: 50%;
	display:block;
	float: left;
	clear: right;
}
.cms_article_username {
	font-size:0.8em;
	padding-bottom: 2px;
	width: 100%;
	display: block;
	position: relative;
	top: 0;
}
.cms_article_published {
	color:red;
	text-align:right;
}
.cms_article_comment_container {
	position: relative;
}
.cms_article_comment_number {
	text-align:left;
	font-weight:bold;
	display: block;
	width: 50%;
	float: left;
	font-size: .8em;
	top: 0;
}
.article_author_date_comment_container .cms_article_comment_number {
	float: right;
	text-align: right;
}
.cms_article_comment_number img {
	position: relative;
	top: 2px;
}
.cms_article_readmore {
	float: right;
	clear: left;
	font-weight: bold;
	width: 50%;
	text-align: right;
	font-size: .8em;
}
.cms_article_readmore img {
	position: relative;
	top: 2px;
}
.article_width {
	width:98%;
	padding: 0 5px;
	clear:both;
	margin-bottom: 5px;
	background: transparent none   ;
}
.fullwidth {
	width:100%;
	padding: 0;
	margin-bottom: 5px;
	clear:both;
	float: left;
	position: relative;
	display:block;
}
.cms_separator {
	border-top: 1px dotted #c8c8c8;
}
.leftcol {
	width:48%;
	float:left;
}
.rightcol {
	width:48%;
	float:right;
/* need to override vbulletin-formcontrols.css declarations */
        margin-left: 0;
        max-width: auto;
}
.rightcol .button {
        cursor: pointer;
}
.leftcol1 {
	width:30%;
	float:left;
}
.centercol1 {
	width:30%;
	margin:0px auto;
}
.rightcol1 {
	width:30%;
	float:right;
	margin-top:-1px;
}
.cms_article_txt_content {
	font:   1em sans-serif,Arial,Tahoma,Calibri,Verdana,Geneva;
	color: #151515;
	margin-bottom: 5px;
}

.cms_article_txt_content ul, .cms_article_txt_content ol, .cms_article_txt_content dl {
	margin:0 40px;
}

.cms_article_txt_content img {
	overflow:hidden;
}


.cms_article_section_location {
	clear:both;
	font-size:0.8em;
	text-align: left;
	margin:1px 0;
}

.cms_pageviews {
	float:right;
}

.header span {
	display:inline;
}
.article {
	padding:0;
	overflow: hidden;
}

.article .align_left,
.article_preview_contents .align_left {
	float:left; /* dont use stylevar for this */
	margin: 1em;
	margin-left: 0;
}
.article .img_align_center,
.article_preview_contents .img_align_center {
	display: block
	width: auto;
	margin: 0 auto;
	text-align: center;
}

.article .align_center,
.article_preview_contents .align_center {
	margin: 0 auto;
}
.article .align_right,
.article_preview_contents .align_right {
	float:right; /* dont use stylevar for this */
	margin: 1em;
	margin-right: 0;
}

.cms_article_preview_image {
	max-height:40%;
	max-width:40%;
}

.article .size_thumbnail,
.article_preview_contents .size_thumbnail {
	max-height:40%;
	max-width:40%;
}

.article .size_medium,
.article_preview_contents .size_medium {
	max-height:300px;
	max-width:300px;
}

.article .size_large,
.article_preview_contents .size_large {
	max-height:1024px;
	max-width:1024px;
}

.article .size_fullsize,
.article_preview_contents .size_fullsize {
	max-width:100%;
	overflow:hidden;
}

/* comments */
.cms_node_edits_title {
	text-align:left;
	font:  normal 12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	clear:both;
}
.cms_node_edits_title img {
	position: relative;
	top: -4px;
}
#node_comments_block {
	margin-top: 25px;
}
.comments_comment_count {
	font-weight: bold;
	font-size: 15px;
	padding-bottom: 10px;
}
.cms_comments_page {
	width:100%;
	text-align:left;
        margin-top:10px;
	clear:both;
}
.cms_comments_page .postbit-lite .postbithead label {
	float: none;
	padding: 0;
	margin-right: 0;
	width: 60%;
}

.cms_comments_page .postbit-lite .texteditor {
	margin-left: 80px;
}

.cms_comments_page .postbit-lite .texteditor .blockrow label{
	font-weight: normal;
}

.cms_comments_page .postbit-lite .postbitfoot {
	width: 55%;
	text-align: right;
	right: 10px;
}

.cms_comments_page .postbit-lite .postbitfoot ul li a {
	white-space: nowrap;
}

.cms_editor_area {
	margin-bottom: 10px;
}
.cms_comment_editor_button {
	padding: 5px;
	text-align: right;
	margin: 5px;
}
.comments_page_nav_css {
	clear:both;
	padding: 10px 0;
	position:relative;
}
.comments_page_nav_css .pagination, .comments_page_nav_css.pagination {
	float: right;
}
.comments_page_nav_css .popupbody {
	position:absolute;
	right: 0;
	left: auto;
}
#node_comments .postbit-lite .avatarlink {
	top: 0;
}

/* -------------------------- */
/* EDITOR */
/* Edit page */
.cms_block .blockhead {
	font-weight:bold;
	margin: 0;
        margin-top:8px;
	text-align:left;
	clear:both;
}

.cms_block .blocksubhead {
	text-align: left;
}

.cms_block .formcontrols .blockrow {
	text-align:left;
	border: 0;
	position: relative;
	padding-top: 0;
	padding-bottom: 0;
}

.cms_block .formcontrols .blockrow .description {
	margin: 0;
	max-width: 100%;
	overflow: visible;
}

.fullwidth.editorheader {
	margin-bottom: 0;
}
.headerbar.editorheader {
	margin-bottom: -5px;
}

.edit_rightside, .mainedit {
	float:left;
	clear: right;
	text-align: left;
	position:relative;
	display:inline-block;
	top:0;
}

.edit_rightside {
	width:38%;
	margin-left:2%;
}

.mainedit {
	width:60%;
}

label, .label {
	font-weight:bold;
	padding: 5px 0;
	display:block;
	float: left;
	clear: right;
}

label.secondary {
	font-weight: normal;
	margin: 0;
	padding: 0;
}

.cms_block .formcontrols .blockrow .group.multifield label {
	display: inline;
}

.cms_block .formcontrols .blockrow div.thirdleft,
.cms_block .formcontrols .blockrow div.twothirdsright,
.cms_block .formcontrols .blockrow div.quarter,
.cms_block .formcontrols .blockrow div.threequarters,
.cms_block .formcontrols .blockrow div.half{
	padding: 5px 0;
}

.cms_block .formcontrols .blockrow .thirdleft {
	width:33%;
}
.cms_block .formcontrols .blockrow .twothirdsright {
	width:64%;
	text-align:left;
	float: left;
}

.cms_block .formcontrols .blockrow .quarter {
	width:25%;
}
.cms_block .formcontrols .blockrow .half {
	width: 50%;
}
.cms_block .formcontrols .blockrow .threequarters {
	width:75%;
	text-align:left;
	float: left;
}
.cms_block .formcontrols .blockrow .editcaption {
	width:20%;
}
.cms_block .formcontrols .blockrow .editcontent {
	margin-left:20%;
	top:0px
	width:80%;
	text-align:left;
	display:block;
}

.cms_block .formcontrols .blockrow .twothirdsright .fullwidth, .cms_block .formcontrols .blockrow .twothirdsright textarea {
	width: 99%;
	padding: 4px 5px;
	margin-bottom: 0;
}

.twothirdsright input.numtxt {
	width: auto;
}

.quarter, .half, .threequarters {
	float: left;
	clear: right;
	display: inline-block;
	margin-top: 3px;
	text-align: left;
}

.quarter {
	width: 25%;
}

.half {
	width: 50%;
}

.threequarters {
	width: 75%;
}

.cms_block .formcontrols .blockrow .threequarters .fullwidth, .cms_block .formcontrols .blockrow .threequarters textarea {
	width: 98%;
	padding: 4px 5px;
	margin-bottom: 0;
}

.taglabel {
	padding-top: 3px; /*depends on size of the tag image and font size */
}

.tagcontainer {
	margin-bottom: 20px;
	display: inline-block;
}

.tagedit {
	float: left;
	clear: right;
	width: 40%;
	margin-right: 10px;
}

.tagedit.description {
	float: left;
	clear: right;
}

.editor_separator {
	text-align: left;
}

.edit_rightside .fullwidth div {
	position: static;
}

.cms_read_access, .cms_edit_categories {
	overflow:auto;
	height:100px;
	width:100%;
	border:1px solid #6B91AB;
}
.cms_edit_categories_bit {
	padding: 2px 0 1px 5px;
	margin: 1px;
}
.formcontrols .blockrow .cms_edit_categories_bit label, .formcontrols .blockrow .cms_edit_categories_bit {
	font-size: 0.8em;
}

.section_menu_options {
	float:left;
	clear:left;
	width:100%;
}

.section_menu_select_options {
	height:120px;
	overflow:auto;
	width: 100%;
	float: left;
	display:block;
	padding: 10px 0 0;
	text-align: left;
}

.section_menu_select_options li {
	margin-left: 10px;
}

.section_menu_select_options li span {
	display: inline-block;
}

.cms_block .blockhead label {
	display: inline;
	float: none;
	margin-left: 1em;
}

.cms_block .blockhead input {
	position: relative;
	top: 0.2em;
}

.cms_content_section_table_con {
	height:600px;
	overflow:auto;
}
.cms_content_section_table_con table {
	font-size: .8em;
}
.cms_content_section_table_con th {
	font-size: 0.75em;
	font-weight:bold;
}
.cms_toc_container {
	clear: both;
	padding-bottom: 20px;
	margin-bottom: 5px;
	float: left;
}
.aligncenter {
	text-align:center;
}

.alignright {
	text-align: right;
}

.alignleft {
	text-align: left;
}

/*edit box*/
.mainedit .editor_textbox iframe {
	height: 400px;
}
.editor_page {
	background: transparent;
	margin: 0;
	padding: 0;
}
.editor {
	border-top-width: 0px;
}
.cms_edit_block {
	float:right;
	padding-left:4px;
}

/* Editbar Classes */
.cms_edit_editbar {
    clear:both;
    min-height:65px;
    text-align:left;
}
.cms_edit_editbar_section, .cms_edit_editbar_buttons, cms_edit_editbar_buttons_bit {
	text-align:center;
	display:inline-block;
	height: 60px;
	position:relative;
}
.cms_edit_editbar_section {
	margin-top: 5px;
	float: left;
	margin-left: 5px;
	text-align:center;
	width:60px;
}
.cms_edit_editbar_buttons {
	border-style:none;
	float:right;
}
.cms_edit_editbar_buttons_bit {
	width:auto;
	min-width: 60px;
	margin-top:5px;
	float:right;
	clear:left;
	text-align:center;
}
.cms_edit_editbar_buttons_bit img, .cms_edit_editbar_buttons_bit input {
	border-style:none;
	margin: 0 auto;
}
.cms_edit_editbar_buttons_bit_txt {
	font-size: 0.8em;
	margin: 1px 0 0 0;
	padding: 1px;
	color: #151515;
	font-weight: normal;
	display:block;
	width: 100%;
}

label.cms_edit_editbar_buttons_bit_txt {
	margin-top: 3px;
}

.cms_edit_editbar_buttons_bit:hover .cms_edit_editbar_buttons_bit_txt {
	text-decoration: underline;
}

/* Moved inline style attributes */

span.error {
	color: #ff0000;
}

div.title {
	position:right;
}

div.title:hover a.edit:hover {
	border-bottom: 3px solid #006699;
}

.inline {
	display:inline;
}
/*--------------------------*/
/* YUI OVERRIDES */
/* Added to get around the yui text-align:center */
body {
	text-align:left;
}
/* to remove left margin for entire page */
#doc3 {
	margin: auto 0;
}

.cmsratingmenu{
	right: 0;
}

.cmsratingmenu .popupbody {
	position: absolute;
	right: 0;
}

.cms_article_username .cmsrating {
	width: 0;
	display:block;
	_display:inline-block;
	float: right;
	clear: left;
	height: 13px;
}
.cmsrating
{
	 background:transparent no-repeat left top;
}
.cmsrating.rating1{ background-image:url(images/rating/rating-trans-15_0.png); padding-left:80px;}
.cmsrating.rating1{ background-image:url(images/rating/rating-15_1.png); padding-left:80px;}
.cmsrating.rating2{ background-image:url(images/rating/rating-15_2.png); padding-left:80px;}
.cmsrating.rating3{ background-image:url(images/rating/rating-15_3.png); padding-left:80px;}
.cmsrating.rating4{ background-image:url(images/rating/rating-15_4.png); padding-left:80px;}
.cmsrating.rating5{ background-image:url(images/rating/rating-15_5.png); padding-left:80px;}

/*RTL rating*/
.cmsrating.rating4.left { background-image:url(images/rating/rating-15_4_left.png); }
.cmsrating.rating3.left { background-image:url(images/rating/rating-15_3_left.png); }
.cmsrating.rating2.left { background-image:url(images/rating/rating-15_2_left.png); }
.cmsrating.rating1.left { background-image:url(images/rating/rating-15_1_left.png); }


.ygtvrow td {
	text-align: left
}


/* Overriding default Grid css values for RTL compatability */
/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
/*
	Note: Throughout this file, the *property (star-property) filter is used
    to give a value to IE that other browsers do not see. _property is only seen
    by IE7, so the combo of *prop and _prop can target between IE6 and IE7.
*/

/*
	Section: General Rules
*/

	body {
		text-align:center;
	}

	#ft {
		clear:both;
	}

/*
	Section: Page Width Rules (#doc, #doc2, #doc3, #doc4)
*/

	/*
		Subsection: General
	*/

	#doc,#doc2,#doc3,#doc4,.yui-t1,.yui-t2,.yui-t3,.yui-t4,.yui-t5,.yui-t6,.yui-t7 {
		margin:auto;
		text-align:left;
		width:57.69em;*width:56.25em;
		min-width:750px;
	}
	/*
		Subsection: 950 Centered (doc2)
	*/
	#doc2 {
		width:73.076em;*width:71.25em;
	}

	/*
		Subsection: 100% (doc3)
	*/
	#doc3 {
		/* left and right margins are not a structural part of Grids. Without them Grids
		   works fine, but content bleeds to the very edge of the document, which often
		   impairs readability and usability. They are
		   provided because they prevent the content from "bleeding" into the browser's chrome.*/
		margin:auto 0px; 
		width:auto;
	}

	/*
		Subsection: 974 Centered (doc4)
	*/
	#doc4 {
		width:74.923em;*width:73.05em;
	}

/*
	Section: Preset Template Rules (.yui-t[1-6])
*/

	/*
		Subsection: General
	*/

	/* to preserve source-order independence for Gecko */
	.yui-b{position:relative;}
	.yui-b{_position:static;}
	#yui-main .yui-b{position:static;}

	#yui-main,
	.yui-g .yui-u .yui-g {width:100%;}

	.yui-t1 #yui-main,
	.yui-t2 #yui-main,
	.yui-t3 #yui-main{float:right;margin-left:-25em;/* IE: preserve layout at narrow widths */}

	.yui-t4 #yui-main,
	.yui-t5 #yui-main,
	.yui-t6 #yui-main{float:left;margin-right:-25em;/* IE: preserve layout at narrow widths */}

	/*
		Subsection: For Specific Template Presets
	*/

	.yui-t1 .yui-b {float:left;width:12.30769em;*width:12.00em;}
	.yui-t1 #yui-main .yui-b{margin-left:13.30769em;*margin-left:13.05em;}

	.yui-t2 .yui-b {float:left;width:13.8461em;*width:13.50em;}
	.yui-t2 #yui-main .yui-b {margin-left:14.8461em;*margin-left:14.55em;}

	.yui-t3 .yui-b {float:left;width:23.0769em;*width:22.50em;}
	.yui-t3 #yui-main .yui-b {margin-left:24.0769em;*margin-left:23.62em;}

	.yui-t4 .yui-b {float:right;width:13.8456em;*width:13.50em;}
	.yui-t4 #yui-main .yui-b {margin-right:14.8456em;*margin-right:14.55em;}

	.yui-t5 .yui-b {float:right;width:18.4615em;*width:18.00em;}
	.yui-t5 #yui-main .yui-b {margin-right:19.4615em;*margin-right:19.125em;}

	.yui-t6 .yui-b {float:right;width:23.0769em;*width:22.50em;}
	.yui-t6 #yui-main .yui-b {margin-right:24.0769em;*margin-right:23.62em;}

	.yui-t7 #yui-main .yui-b {display:block;margin:0 0 1em 0;}

	#yui-main .yui-b {float:none;width:auto;}

/*
	Section: Grids and Nesting Grids
*/

	/*
		Subsection: Children generally take half the available space
	*/

	.yui-gb .yui-u,
	.yui-g .yui-gb .yui-u,
	.yui-gb .yui-g,
	.yui-gb .yui-gb,
	.yui-gb .yui-gc,
	.yui-gb .yui-gd,
	.yui-gb .yui-ge,
	.yui-gb .yui-gf,
	.yui-gc .yui-u,
	.yui-gc .yui-g,
	.yui-gd .yui-u {float:left;}

	/*Float units (and sub grids) to the right */
	.yui-g .yui-u,
	.yui-g .yui-g,
	.yui-g .yui-gb,
	.yui-g .yui-gc,
	.yui-g .yui-gd,
	.yui-g .yui-ge,
	.yui-g .yui-gf,
	.yui-gc .yui-u,
	.yui-gd .yui-g,
	.yui-g .yui-gc .yui-u,
	.yui-ge .yui-u,
	.yui-ge .yui-g,
	.yui-gf .yui-g,
	.yui-gf .yui-u{float:right;}

	/*Float units (and sub grids) to the left */
	.yui-g div.first,
	.yui-gb div.first,
	.yui-gc div.first,
	.yui-gd div.first,
	.yui-ge div.first,
	.yui-gf div.first,
	.yui-g .yui-gc div.first,
	.yui-g .yui-ge div.first,
	.yui-gc div.first div.first {float:left;}

	.yui-g .yui-u,
	.yui-g .yui-g,
	.yui-g .yui-gb,
	.yui-g .yui-gc,
	.yui-g .yui-gd,
	.yui-g .yui-ge,
	.yui-g .yui-gf {width:49%;}

        .yui-g .yui-u, .yui-g .yui-g {margin-right: 0.8%;}

	.yui-gb .yui-u,
	.yui-g .yui-gb .yui-u,
	.yui-gb .yui-g,
	.yui-gb .yui-gb,
	.yui-gb .yui-gc,
	.yui-gb .yui-gd,
	.yui-gb .yui-ge,
	.yui-gb .yui-gf,
	.yui-gc .yui-u,
	.yui-gc .yui-g,
	.yui-gd .yui-u {width:32%;margin-left:1.99%;}

		/* Give IE some extra breathing room for 1/3-based rounding issues */
		.yui-gb .yui-u {*margin-left:1.9%;*width:31.9%;}

	.yui-gc div.first,
	.yui-gd .yui-u {width:66%;}
	.yui-gd div.first {width:32%;}

	.yui-ge div.first,
	.yui-gf .yui-u{width:74.2%;}

	.yui-ge .yui-u,
	.yui-gf div.first {width:24%;}

	.yui-g .yui-gb div.first,
	.yui-gb div.first,
	.yui-gc div.first,
	.yui-gd div.first {margin-left:0;}

	/*
		Section: Deep Nesting
	*/
	.yui-g .yui-g .yui-u,
	.yui-gb .yui-g .yui-u,
	.yui-gc .yui-g .yui-u,
	.yui-gd .yui-g .yui-u,
	.yui-ge .yui-g .yui-u,
	.yui-gf .yui-g .yui-u {width:49%;*width:48.1%;*margin-left:0;}

	.yui-g .yui-g .yui-u {width:48.1%;}/*SF 1927599 from 1.14 to 2.6.0*/
	.yui-g .yui-gb div.first,
	.yui-gb .yui-gb div.first {*margin-right:0;*width:32%;_width:31.7%;}

	.yui-g .yui-gc div.first,
	.yui-gd .yui-g  {width:66%;}

	.yui-gb .yui-g div.first {*margin-right:4%;_margin-right:1.3%;}

	.yui-gb .yui-gc div.first,
	.yui-gb .yui-gd div.first  {*margin-right:0;}

	.yui-gb .yui-gb .yui-u,
	.yui-gb .yui-gc .yui-u {*margin-left:1.8%;_margin-left:4%;}

	.yui-g .yui-gb .yui-u {_margin-left:1.0%;}

	.yui-gb .yui-gd .yui-u {*width:66%;_width:61.2%;}
	.yui-gb .yui-gd div.first {*width:31%;_width:29.5%;}

	.yui-g .yui-gc .yui-u,
	.yui-gb .yui-gc .yui-u {width:32%;_float:right;margin-right:0;_margin-left:0;}
	.yui-gb .yui-gc div.first {width:66%;*float:left;*margin-left:0;}

	.yui-gb .yui-ge .yui-u,
	.yui-gb .yui-gf .yui-u {margin:0;}

	.yui-gb .yui-gb .yui-u {_margin-left:.7%;}

	.yui-gb .yui-g div.first,
	.yui-gb .yui-gb div.first {*margin-left:0;}

	.yui-gc .yui-g .yui-u,
	.yui-gd .yui-g .yui-u {*width:48.1%;*margin-left:0;}

	.yui-gb .yui-gd div.first {width:32%;}
	.yui-g .yui-gd div.first {_width:29.9%;}

	.yui-ge .yui-g {width:24%;}
	.yui-gf .yui-g {width:74.2%;}

	.yui-gb .yui-ge div.yui-u,
	.yui-gb .yui-gf div.yui-u {float:right;}
	.yui-gb .yui-ge div.first,
	.yui-gb .yui-gf div.first  {float:left;}

	/* Width Accommodation for Nested Contexts */
	.yui-gb .yui-ge .yui-u,
	.yui-gb .yui-gf div.first {*width:24%;_width:20%;}

	/* Width Accommodation for Nested Contexts */
	.yui-gb .yui-ge div.first,
	.yui-gb .yui-gf .yui-u{*width:73.5%;_width:65.5%;}

	/* Patch for GD within GE */
	.yui-ge div.first .yui-gd .yui-u {width:65%;}
	.yui-ge div.first .yui-gd div.first {width:32%;}

/*
	Section: Clearing
*/

#bd:after,
.yui-g:after,
.yui-gb:after,
.yui-gc:after,
.yui-gd:after,
.yui-ge:after,
.yui-gf:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
#bd,
.yui-g,
.yui-gb,
.yui-gc,
.yui-gd,
.yui-ge,
.yui-gf{zoom:1;}
	/**
	 * Custom YUI Grids for vBulletin
	 * By default, they're 750px width, but could change depending on override
	 * tvb-l1 : 160px on the left
	 * tvb-l2 : 180px on the left
	 * tvb-l3 : 240px on the left
	 * tvb-l4 : 300px on the left
	 * tvb-r1 : 160px on the right
	 * tvb-r2 : 180px on the right
	 * tvb-r3 : 240px on the right
	 * tvb-r4 : 300px on the right
	*/

	.yui-tvb-l1,.yui-tvb-l2,.yui-tvb-l3,.yui-tvb-l4,.yui-tvb-r1,.yui-tvb-r2,.yui-tvb-r3,.yui-tvb-r4 {
		margin:auto;
		text-align:left;
		width:57.69em;*width:56.25em;
		min-width:750px;
	}

	.yui-tvb-l1 #yui-main,
	.yui-tvb-l2 #yui-main,
	.yui-tvb-l3 #yui-main,
	.yui-tvb-l4 #yui-main{float:right;margin-left:-25em;/* IE: preserve layout at narrow widths */}

	.yui-tvb-r1 #yui-main,
	.yui-tvb-r2 #yui-main,
	.yui-tvb-r3 #yui-main,
	.yui-tvb-r4 #yui-main{float:left;margin-right:-25em;/* IE: preserve layout at narrow widths */}

	/*
		Subsection: For Specific Template Presets
	*/

	.yui-tvb-l1 .yui-b {float:left;width:12.30769em;*width:12.00em;}
	.yui-tvb-l1 #yui-main .yui-b{margin-left:13.30769em;*margin-left:13.05em;}

	.yui-tvb-l2 .yui-b {float:left;width:13.8461em;*width:13.50em;}
	.yui-tvb-l2 #yui-main .yui-b {margin-left:14.8461em;*margin-left:14.55em;}

	.yui-tvb-l3 .yui-b {float:left;width:18.4615em;*width:18.00em;}
	.yui-tvb-l3 #yui-main .yui-b {margin-left:19.4615em;*margin-left:19.125em;}

	.yui-tvb-l4 .yui-b {float:left;width:23.0769em;*width:22.50em;}
	.yui-tvb-l4 #yui-main .yui-b {margin-left:24.0769em;*margin-left:23.62em;}

	.yui-tvb-r1 .yui-b {float:right;width:12.30769em;*width:12.00em;}
	.yui-tvb-r1 #yui-main .yui-b {margin-right:13.30769em;*margin-right:13.05em;}

	.yui-tvb-r2 .yui-b {float:right;width:13.8456em;*width:13.50em;}
	.yui-tvb-r2 #yui-main .yui-b {margin-right:14.8456em;*margin-right:14.55em;}

	.yui-tvb-r3 .yui-b {float:right;width:18.4615em;*width:18.00em;}
	.yui-tvb-r3 #yui-main .yui-b {margin-right:19.4615em;*margin-right:19.125em;}

	.yui-tvb-r4 .yui-b {float:right;width:23.0769em;*width:22.50em;}
	.yui-tvb-r4 #yui-main .yui-b {margin-right:24.0769em;*margin-right:23.62em;}

	.yui-tvb-l25 {float:left;clear:right;width:25%;padding:0px;margin:0px;}
	.yui-tvb-r25 {float:right;width:24%;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-l30 {float:left;clear:right;width:29%;padding:0px;margin:0px 0.5%;}
	.yui-tvb-r30 {float:right;clear:left;width:30%;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-30 {left:30%;width:30%;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-l40 {width:39%;float:left;clear:right;padding:0px;margin:0px 0.5%;}
	.yui-tvb-r40 {width:39%;float:right;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-40 {clear:right;left:30%;width:40%;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-50 {left:25%;width:40%;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-l50 {float:left;clear:right;width:46%;padding:0px;margin:0px 2%;}
	.yui-tvb-l60 {width:59%;float:left;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-r60 {width:59%;float:right;clear:right;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}
	.yui-tvb-70 {width:70%;float:clear;padding:0px 0px 0px 0px;margin:0px 0px 0px 0px;}

.vB_DatePicker {
	z-index: 9999;
	position: relative;
	width: 130px;
	background: #fcfcfc;
}

.navpopupmenu a.textcontrol img {
	left: 0;
}

.mainedit #attachfiles legend {
	display:none;
}
.mainedit #attachfiles label {
	display:none;
}
.mainedit #attachfiles .rightcol {
	margin-left:0;
	max-width:none;
	width:auto;
}
.mainedit #attachfiles .description {
	margin-left:0;
	max-width:none;
	width:auto;
}
#below_contentlist .pagination {
	float:right;
}

.popupbody li > a, .popupbody li > label {
	float: none;
}

.navpopupbody {
	right: auto;
	overflow-y: auto;
}

.cms_block .formcontrols .blockrow div.cms_section_select {
	overflow-x: scroll;
	overflow-y: hidden;
	padding-bottom: 0;
	padding-top: 0;
	margin-bottom: 5px;
	border: 1px solid #6B91AB;
}

.cms_section_select select {
	border: 0;
	min-width: 100%;
}

.vbcms_content img {
	max-width: 100%;
}
.vbcms_tag_cont{
font-size:1.2em !important;
line-height:1.5em !important;
}


/* CSS Document */

.postbit-lite {
	clear:both;
	position:relative;
	padding-bottom:10px;
	background: transparent none   ;
}

.postbit.postbit-lite {
	border:0;
}
.postbit-lite.noavatar {
	padding-left:0;
}

.postbit-deleted,
.postbit-ignored {
	padding-left:0;
}

.postbit-deleted .postcontent.deletereason dt, .postbit-deleted .postcontent.deletereason dd {
	display:block;
}

.postbit-deleted .posttext .deletedby {
	font-weight:bold;
}

.postbit-deleted .managelinks {
	float:right;
	margin-right:10px;
}

.postbit-deleted .managelinks a {
	margin-left:1em;
	text-decoration:none;
	font-size:0.8em;
}

.postbit-lite dl.stats.groups {
	font-size:0.8em;
	margin-left:58px;
	margin-bottom:-10px;
	font-weight:normal;
}

.postbit-lite dl.stats.groups dd {
	padding-right:10px;
}

.postbit-lite p.moderated {
	padding:10px 10px 0;
}

.postbit-lite.imod_highlight,
.postbit-lite.imod_highlight .blocksubhead,
.postbit-lite.imod_highlight:hover .blockfoot {
	background:#FFEB90 none no-repeat 10px 10px;
}

.postbit-lite .postbithead {
	color: #3e3e3e;
	background: #f2f2f2 none repeat-x  ;
	border: 0px solid #CEDFEB;
	padding: 5px 10px;
	margin-left:58px;
	text-align: left;
}

.postbit-lite .postbithead label {
	margin-right: 300px;
	display: block;
}

.postbit-lite .postbit-chkbox {
	position: absolute;
	right: 10px;
	margin-top: 5px;
}

.postbit-lite .avatarlink {
	float: left;
	clear: right;
}

.postbit-lite .avatarlink img {
	max-height:48px;
max-width:48px;
	width: auto;
}

.postbit-lite .username {
	font-weight:normal;
}

.postbit-lite .posttext {
	padding:10px;
	font:   1em sans-serif,Arial,Tahoma,Calibri,Verdana,Geneva;
	margin-left:58px;

}

.postbit-lite .postbithead.no_avatar,
.postbit-lite .posttext.no_avatar,
.postbit-lite .postinfo.no_avatar {
	margin-left:0;
}

.postbit-lite .posttext ul, .postbit-lite .posttext ol, .postbit-lite .posttext dl {
	margin:0 40px;
}

.postbit-lite.noavatar .posthead, .postbit-lite.noavatar .posttext, .postbit-lite.noavatar p.moderated {
	margin-left: 0;
}

.postbit-lite .postinfo {
	color:#777777;
}

.postbit-lite .postbitfoot {
	position: absolute;
	top: 5px;
	right: 10px;
}

.postbit-lite .postbitfoot .postcontrols li {
	display: inline;
	position: relative;
	top: -3px;
}

.postbit-lite .postbitfoot .postcontrols li.separator {
	color: #CEDFEB; /* do not change, makes the separator appear like a border */
	font-size: 17px;
	position: relative;
	top: -2px;
}

.postbit-lite .postbitfoot .postcontrols a {
	color: #417394;
}

.postbit-lite .postbitfoot .postcontrols li img {
	position: relative;
	top: 2px;
}

.postbit-lite .postbitfoot .postcontrols a, .postbit-lite .postbitfoot .postcontrols a:hover {
	border:0;
	padding:0;
	font-size: 0.8em;
	margin-right: 10px;
}

.postbit-lite .postbitfoot .postcontrols a:hover {
	text-decoration: none /* to preserve normal style of links. do not change */
}

.postbit-lite input.inlinemod {
	position:relative;
	top:2px;
}

.postbit-lite.moderated-picturecomment {
	padding-left:0;
}

.postbit-lite.moderated-picturecomment .postbithead,
.postbit-lite.moderated-picturecomment .posttext,
.postbit-lite.moderated-picturecomment .stats.groups,
.postbit-lite.moderated-picturecomment .posttext {
	margin-left:620px
}

.postbit-lite img.statusicon,
.postbit-lite img.posticon {
	vertical-align:top;
}

.postbit-lite .title img {

}

/* Moderated Picture Comments Attachent */
.avatarlink.pc-attachment {
	width:600px;
	font-size:0.8em;
	text-align:center;
}

.avatarlink.pc-attachment img {
	width:600px;
}
.postbit-lite .comment_blockrow label {
	margin-right: 300px;
	display: block;
}

.postbit-lite .comment_blockrow {
	color: #3e3e3e;
	float: right;
	width: 100%;
}

.postbit-lite .comment_text {
	clear: right;
}

.postbit-lite .postbit_headers {
	background: #f2f2f2 none repeat-x  ;
	border: 0px solid #CEDFEB;
}

.postbit-lite .postbit_pb_right {
	margin-left: 58px;
}
.postbit-lite .postbit_pb_left {
	float: left;
}

.postbit-lite .comment_blockrow .floatleft {
	float: left;
	padding: 5px 10px 5px 10px;
}
.postbit-lite .comment_blockrow .floatright {
	float: right;
}
.postbit-lite .comment_blockrow.no_avatar {
	margin-left:0;
}
.postbit-lite .floatright .postcontrols {
	float: right;
}
.postbit-lite .floatright .postcontrols li {
	display: inline-block;
	padding: 5px;
}
.postbit-lite .floatright .postcontrols a,
.postbit-lite .floatright .postcontrols {
	color: #417394;
	font-size: 0.8em; 
}
.postbit-lite .floatright .postcontrols li img {
	position: relative;
	top: 2px;
}
.postbit-lite .postbit_pb_right .restore_margin {
	margin-left: 0;
}
.postbit-lite div.post_message_blockrow {
	float: right; 
	width: 100%;
}



/* CSS Document */

.postlist, #postlist {
	clear:both;
	margin-top:5px;
	margin-bottom:10px;
	position:relative;
	_height: 1%;
	_zoom: 1;
}


.above_postlist, #above_postlist {
	width:100%;
	position:relative;
	left:0;
	float: left;
	margin-top: 5px;
	height: /* ~~cannot perform math on mixed units ~~ found (px,em) in 1em+4px+4px+10px */;
	_height: 1%;
	_zoom: 1;
}

.posts, #message_list {
	margin:10px 0;
}

#inlinemod_formctrls ul {
	left:auto;
	right:0;
}

.postlist_navpopup {
	clear:both;
	margin-top:2em;
}

.qr_require_click {
	display: none;
}

form#quick_reply {
	max-width:100%;
}

form#quick_reply .actionbuttons .group {
	max-width:100%;
}

form#quick_reply textarea {
	height:100px;
}

.above_postlist .newcontent_textcontrol {
	margin-top: 5px;
	position: relative;
	_display:inline;
}

#pagination_postlist_bottom {
	float:left;
}

.pagination_top {
	width: 60%;
	float: right;
	position: relative;
	margin-top: 5px;
	right: 0;
}

.above_postlist .pagination_top .pagination, .above_postlist .pagination_top .postpagestats {
	float: right;
	clear:left;
	vertical-align:middle;
	font-size: .8em;
	color: #151515;
	_display:inline;
}

.postpagestats {
	margin-top: -1px; 
	vertical-align:inherit;
}
	
.pagination_top .pagination {
	margin-left: 10px;
	position: relative;
	top: -3px;
}

.postlistfoot {
	display:block;
	width: 100%;
        height: 2em;
        clear:both;
        position: relative;
}

.below_postlist {
	display:block;
	clear:both;
	position: relative;
	float: right;
	margin-top: 45px;
	margin-bottom: 1em;
	width: 100%;
}
.noinlinemod.below_postlist {
	margin-top: -2.5em;
}
.discussionlist + .below_postlist {
	margin-bottom: 20px;
}

.below_postlist .pagination_bottom {
	float: right;
	margin-top: 5px;
	width: 100%;
}

.below_postlist .pagination_bottom .pagination {
	float: right;
	clear: left;
	margin-left: 5px;
	position: relative;
        margin-bottom: 1em;
}

.below_postlist .newcontent_textcontrol {
	position: absolute;
	top: -2.5em;
}
.noinlinemod.below_postlist .newcontent_textcontrol {
	top: 0em;
}



/* CSS Document */

.lightbox {
	position:absolute;
	/* left:0; */
	top:0;
}

.lightbox > div {
	background-color:#000000;
	padding:14px;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	border-radius:14px;
}

.lightbox > div > div {
	background-color:#F5F5F5;
	padding:6px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;	
	border-radius:5px;	
}

.lightbox .wider {
	width:106%;
}

.lightbox .picturerow {
	text-align:center;
}

.lightbox .buttonrow,
.lightbox .descrow {
	color:#666666;
	padding-top:4px;
	font-size:0.8em;
}

.lightbox .buttonrow .closebutton,
.lightbox .descrow .filename {
	float:right;
}

/*
.lightbox .progress {
	border:solid 4px #000000;
	border-bottom-width:0px
}
*/


/* CSS Document */

#vb_overlay_background {
	opacity:0.85;
	-moz-opacity:0.85;
	filter:alpha(opacity=85);
	background-color:#000000;
	z-index:10;
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
}

#vb_overlay_clearbackground {
	opacity:0.00;
	-moz-opacity:0.00;
	filter:alpha(opacity=0);
	background-color:#FFFFFF;
	z-index:12;
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
}

#vb_overlay_overlaybox {
	z-index:11;
	position:absolute;
	top:50%;
	left:50%;
	float:left;
        background-color:white;
        padding-left:10px;
        padding-right:10px;
}

#vb_overlay_close_box {
	text-align:right;
}

#vb_overlay_close {
	border:1px solid white;
	padding:1px;
	background-color:black;
        background-image:none; /* necessary to override controlpanel.css .button behavior */
	color:white;
	width:20px;
	position:absolute;
	top:12px;
	right:20px;
	font-weight:bold;
	cursor:pointer;
}

#vb_overlay_frame {
	border:1px solid #FFFFFF;
	padding:3px;
}

#vb_overlay_content {
	background-color:#EEEEEE;
}

.overlay_title {
	font-weight:normal;
	font-size: inherit;
	color:#3e3e3e;
	background:#e9e9e9  repeat-x;
	padding:10px;
	border-bottom:solid 1px #6b91ab;
}

#vb_overlay_progressimage {
	border:none;
	width:300px;
	height:200px;
	z-index:13;
	position:absolute;
	top:50%;
	left:50%;
	margin:-250px 0 0 -250px;
}

.vb_overlay_progressimage2 {
	float:right;
}

#vb_overlay_progressimage2 {
	border:none;
}

#vb_overlay_savebox {
	text-align:right;
	padding-right:12px;
	margin-top: -20px;
	position: relative;
}

#vb_overlay_save {
	border:1px solid white;
	padding:3px;
	background-color:black;
        background-image:none; /* necessary to override controlpanel.css .button behavior */
	color:white;
	position:relative;
	top:-12px;
	font-weight:bold;
	cursor:pointer;
}

#vb_overlay_cancel {
	border:1px solid white;
	padding:3px;
	background-color:black;
        background-image:none; /* necessary to override controlpanel.css .button behavior */
	color:white;
	position:relative;
	top:-12px;
	font-weight:bold;
	cursor:pointer;
}

#vb_overlay_save.vb_overlay_highlight,
#vb_overlay_cancel.vb_overlay_highlight {
	border:1px solid black;
	background-color:white;
	color:black;
        background-image:none; /* necessary to override controlpanel.css .button behavior */
}

#vb_overlay_close.vb_overlay_highlight {
	background-color:#CC3333;
}

#vb_overlay_overlaybox_content {
	margin-top: 1em;
}

.fullwidth {
	width: 100%; 
	clear:both; 
	margin-bottom: 5px;
}

.label {
	float:left; 
	width: 200px; 
	clear:right;
}

.longlabel {
	float:left; 
	width: 300px; 
	clear:right;
}

.description {
	margin-left: 200px; 
	margin-bottom: 0.5em; 
	clear:both;
}

.longdescription {
	margin-left: 300px; 
	margin-bottom: 0.5em; 
	clear:both; 
}

.longinput {
	width: 400px; 
}

.categorylabel {
	font-weight:bold;
}

a.tagcloudlink:link, a.tagcloudlink:visited {
	text-decoration:none;
}

a.tagcloudlink:hover,
a.tagcloudlink:active {
	text-decoration:underline;
}

a.level1 {
	font-size: 0.75em;
}

a.level2 {
	font-size: .8em;
}

a.level3 {
	font-size: 15px;
}

a.level4 {
	font-size: 18px;
}

a.level5 {
	font-size: 21px;
}

#tag_searchbox {
	text-align: center; padding: 6px;
}

#tag_search {
	margin-top:10px;
}