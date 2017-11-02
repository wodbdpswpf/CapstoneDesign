<html lang="ko"><head>

<meta charset                             ="utf-8">

<script language="javascript">

function count_ck(){
							var chkbox = document.getElementsByName("apc");
							var chkCnt = 0;
							var val = '';

							for(var i=0;i<chkbox.length; i++){
								if(chkbox[i].checked){
									chkCnt++;
								}
							}
							if(chkCnt>1){
								alert("1개만 선택 가능합니다.");
								obj.checked = false;
								return false;
							}else for(i=1;i<=frmPopup.hdnLine.value;i++){
							if(eval("frmPopup.chk"+i+".checked")==true)
							{
								val = val + eval("frmPopup.chk"+i+".value") + ',';
							}
						}
						<?php echo "window.opener.document.getElementById('".$_GET['p_project_tasks']."').value = val;" ?>
						window.close();
					}
</script>

<link rel="stylesheet" type="text/css" href="/css/default.css">
<style type="text/css">
#oneCueSearch {zoom:1; position:relative; color:#666;}
#oneCueSearch input {font-family:Gulim, Arial, AppleGothic, sans-serif;}
#oneCueSearch a {color:#666;}
#oneCueSearch h4 {color:#333; font-weight:bold;}
#oneCueSearch .devOcSelectedListFrame {overflow:hidden; zoom:1;}
#oneCueSearch .devOcSelectedListFrame li {float:left; display:inline;}
#oneCueSearch .devOcSelectedListFrame input {width:13px; height:13px; position:relative; top:-1px;}
#oneCueSearch .noResult {display:none; color:#999;}
#oneCueSearch .listEmpty .noResult {display:block;}
#oneCueSearch .listEmpty .devOcSelectedListFrame {display:none;}
#oneCueSearch .infoLayer {display:none;}
#oneCueSearch .ocKeywordGuide {letter-spacing:-1px; padding:4px 0 6px 1px;}
#oneCueSearch .ocKeywordGuide li {background:url(/img/text_user/resume/bu_square2.gif) no-repeat 0 4px; color:#666; padding-left:6px; padding-bottom:5px;}
#oneCueSearch .ocKeywordGuide li img {vertical-align:middle; position:relative; top:-2px; margin:0 -1px 0 -1px;}/* //110330 */
#oneCueSearch .ocSelect {zoom:1; overflow:hidden;}
#oneCueSearch .ocSelect .areaContentsWrap {overflow:hidden; zoom:1; padding:13px 5px 15px 0; border:1px solid #dedede;}
#oneCueSearch .ocSelect .areaContentsFrame {height:318px; overflow:auto; overflow-x:hidden; position:relative;}
.mobile #oneCueSearch .ocSelect .areaContentsFrame {height:auto; overflow:visible;}
#oneCueSearch .ocSelected {padding:25px 0 6px 0; position:relative; zoom:1;}
#oneCueSearch .ocSelected .ttSelected {border:1px solid #c9c9c9; border-right:1px solid #ebebeb; border-bottom:1px solid #ebebeb; width:683px; height:60px; overflow:auto; overflow-x:hidden; font:12px/17px Gulim, sans-serif; padding:4px 0 4px 4px; color:#666;}
#oneCueSearch .ocSelected .ocGuide {color:#6084b6; font:11px/16px Dotum, sans-serif; padding:5px 0 0 6px; letter-spacing:-1px;}
#oneCueSearch .ocSelected .ocGuide strong {color:#fc6c09; font-weight:normal;}
#oneCueSearch .ocView {padding-top:14px; text-align:center;}
#oneCueSearch .ocReset {position:absolute; right:1px; top:21px;}
#oneCueSearch #keywordList {padding:0 0 10px 15px; zoom:1; overflow:hidden; line-height:15px;}
#oneCueSearch #keywordList li {margin-right:14px; line-height:normal; font-weight:normal; position:relative; zoom:1; color:#333; margin-bottom:8px;}
#oneCueSearch #keywordList li h4 {padding:10px 4px 8px 20px; letter-spacing:-1px; background:#f0f4fa  no-repeat 13px -136px;}
#oneCueSearch #keywordList li h4 input {position:relative; top:-1px;}
#oneCueSearch #keywordList li span {display:none;}
#oneCueSearch #keywordList li .esMoreLess {display:block;}
#oneCueSearch #keywordList ul {zoom:1; overflow:hidden; margin-left:14px; margin-right:-70px; padding:10px 0 2px 0; *margin-bottom:-4px;}
#oneCueSearch #keywordList li li {float:left; display:inline; width:141px; padding-top:2px;}
#oneCueSearch #keywordList li li img {margin-top:2px;}
#oneCueSearch #keywordList input {width:13px; height:13px; margin-right:0; vertical-align:middle;}
#oneCueSearch #keywordList label {letter-spacing:-1px; padding:2px 4px 0 1px; margin-left:2px;}
#oneCueSearch #keywordList .disabled {color:#999;}
#oneCueSearch #keywordList li li input {margin-right:0; position:relative; top:-1px;}
#oneCueSearch #keywordList .standalone {width:120px; float:left; display:inline; margin-right:8px;}
#oneCueSearch .esMoreLess {position:absolute; top:7px; right:3px; padding-bottom:2px; padding-right:4px; padding-left:8px; background:url(/images/list_gi/area/sprite_icon.gif) no-repeat 0 -115px;}
#oneCueSearch .esMore {background-position:0 -85px;}
#oneCueSearch .ocSelected .assist {color:#ff6b09; font:11px/15px Dotum, sans-serif; font-weight:normal; margin-left:6px; letter-spacing:0;}

</style>

</head>

<body >

<div  style="width:550px; height:70px;">
			<div id="oneCueSearch">
				<form id="frmPopup" name="frmPopup" class="ocSelect" method="get" action="">
					<fieldset class="ocSelected">
										<legend><strong>키워드 선택</strong><span class="assist"> | 1개 선택 </span></legend>

						<div id="devAreaContents" class="areaContentsWrap">
							<div class="areaContentsFrame">
								<ul id="keywordList">
									<li class="mainArea">
										<h4>화학·에너지·환경·식품</h4>
										<ul>
											<li><input type="checkbox" id="chk1" name="apc" value="d030014"> <label class="areaText" for="chk1">기구설계</label></li>
											<li><input type="checkbox" id="chk2" name="apc" value="d030004"> <label class="areaText" for="chk2">기술연구소</label></li>
											<li><input type="checkbox" id="chk3" name="apc" value="d030001"> <label class="areaText" for="chk3">기술직</label></li>
											<li><input type="checkbox" id="chk4" name="apc" value="d030014"> <label class="areaText" for="chk4">기구설계</label></li>
											<li><input type="checkbox" id="chk5" name="apc" value="d030004"> <label class="areaText" for="chk5">기술연구소</label></li>
										</ul>
									</li>

									<li class="mainArea">
										<h4>기계설계·CAD·CAM</h4>
										<ul>
											<li><input type="checkbox" id="chk6" name="apc" value="d050018"> <label class="areaText" for="chk6">2D</label></li>
											<li><input type="checkbox" id="chk7" name="apc" value="d050001"> <label class="areaText" for="chk7">CAD</label></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div >
							<input name="hdnLine" type="hidden" value="7">
							<button type="button" id="" onclick="JavaScript:count_ck();">선택완료</button>
						</div>
					</fieldset>
				</form>
			</div>
</div>

</body></html>
