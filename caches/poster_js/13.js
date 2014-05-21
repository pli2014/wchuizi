function PCMSAD(PID) {
  this.ID        = PID;
  this.PosID  = 0; 
  this.ADID		  = 0;
  this.ADType	  = "";
  this.ADName	  = "";
  this.ADContent = "";
  this.PaddingLeft = 0;
  this.PaddingTop  = 0;
  this.Width = 0;
  this.Height = 0;
  this.IsHitCount = "N";
  this.UploadFilePath = "";
  
  this.Step = 1;
  this.Delay= 20;
  this.WindowHeight = 0;
  this.WindowWidth = 0;
  this.Yon = 0;
  this.Xon = 0;
  this.Pause = true;
  this.Interval = null;
  this.URL = "";
  this.SiteID = 0;
  
  this.ShowAD  = showADContent;
  this.Start   = doStart;
  this.Stat = statAD;
}

function statAD() {
	var new_element = document.createElement("script"); 
	new_element.type = "text/javascript";
	new_element.src="http://114.215.183.100:8080/index.php?m=poster&c=index&a=show&siteid="+this.SiteID+"&spaceid="+this.ADID+"&id="+this.PosID;
	document.body.appendChild(new_element);
}

function showADContent() {
  var content = this.ADContent;
  var str = "<div id='PCMSAD_"+this.PosID+"' style='left:"+this.PaddingLeft+"px;top:"+this.PaddingTop+"px;width:"+this.Width+"px; height:"+this.Height+"px; position: absolute;visibility: visible;z-index:999999;' onMouseOver='"+this.ID+"_pause_resume();' onMouseOut='"+this.ID+"_pause_resume();'>";
  var AD = eval('('+content+')');
  if (this.ADType == "images") {
	  if (AD.Images[0].imgADLinkUrl) str += "<a href='"+this.URL+"?m=poster&c=index&a=poster_click&siteid="+this.SiteID+"&id="+this.ADID+"&url="+AD.Images[0].imgADLinkUrl+"' target='_blank'>";
	  str += "<img title='"+AD.Images[0].imgADAlt+"' src='"+this.UploadFilePath+AD.Images[0].ImgPath+"' width='"+this.Width+"' height='"+this.Height+"' style='border:0px;'>";
	  if (AD.Images[0].imgADLinkUrl) str += "</a>";
  }else if(this.ADType == "flash"){
	  str += "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='"+this.Width+"' height='"+this.Height+"' id='FlashAD_"+this.PosID+"' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'>";
	  str += "<param name='movie' value='"+this.UploadFilePath+AD.Images[0].ImgPath+"' />"; 
      str += "<param name='quality' value='autohigh' />";
      str += "<param name='wmode' value='opaque'/>";
	  str += "<embed wmode='opaque' src='"+this.UploadFilePath+AD.Images[0].ImgPath+"' quality='autohigh' name='flashad' swliveconnect='TRUE' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='"+this.Width+"' height='"+this.Height+"'></embed>";
      str += "</object>";	  
  }
  str += "<div style='text-align:right;'><a href='#;' onclick='javascript:document.getElementById(\"PCMSAD_"+this.PosID+"\").style.display=\"none\"'>关闭</a></div>";
  str += "</div>";
  document.write(str);
}

function changePos(float) {	
	float.WindowWidth  = document.compatMode == "BackCompat" ? document.body.clientWidth : document.documentElement.clientWidth;
	float.WindowHeight = document.compatMode == "BackCompat" ? document.body.clientHeight : document.documentElement.clientHeight;
	document.getElementById("PCMSAD_"+float.PosID).style.left = (float.PaddingLeft + (Math.max(document.documentElement.scrollLeft, document.body.scrollLeft)))+"px";
	document.getElementById("PCMSAD_"+float.PosID).style.top = (float.PaddingTop + (Math.max(document.documentElement.scrollTop, document.body.scrollTop)))+"px";
	if (float.Yon){
		float.PaddingTop = float.PaddingTop + float.Step;
	}else{
		float.PaddingTop = float.PaddingTop - float.Step;
	}
	if (float.PaddingTop < 0){
		float.Yon = 1;
		float.PaddingTop = 0;
	}
	if (float.PaddingTop >= (float.WindowHeight - float.Height)){
		float.Yon = 0;float.PaddingTop = (float.WindowHeight - float.Height);
	}
	if (float.Xon){
		float.PaddingLeft = float.PaddingLeft + float.Step;
	}else{
		float.PaddingLeft = float.PaddingLeft - float.Step;
	}
	if (float.PaddingLeft < 0){
		float.Xon = 1;
		float.PaddingLeft = 0;
	}
	if (float.PaddingLeft >= (float.WindowWidth - float.Width)){
		float.Xon = 0;
		float.PaddingLeft = (float.WindowWidth - float.Width);   
	}
}
	
function doStart(float){
	return function(){
        changePos(float);
    }
}
 
function cmsAD_13_pause_resume(){if(cmsAD_13.Pause){clearInterval(cmsAD_13.Interval);cmsAD_13.Pause = false;}else {cmsAD_13.Interval = setInterval(cmsAD_13.Start(cmsAD_13),cmsAD_13.Delay);cmsAD_13.Pause = true;}} 
var cmsAD_13 = new PCMSAD('cmsAD_13'); 
cmsAD_13.PosID = 13; 
cmsAD_13.ADID = 25; 
cmsAD_13.ADType = "images"; 
cmsAD_13.ADName = "锤子漂移"; 
cmsAD_13.ADContent = "{'Images':[{'imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://114.215.183.100:8080/uploadfile/2014/0429/20140429051134560.png'}],'imgADLinkTarget':'New','Count':'1','showAlt':'Y'}"; 
cmsAD_13.URL = "http://114.215.183.100:8080/index.php?m=poster&c=index"; 
cmsAD_13.SiteID = 1; 
cmsAD_13.PaddingLeft =  30 ; 
cmsAD_13.PaddingTop =  30 ; 
cmsAD_13.Width = 120; 
cmsAD_13.Height = 120; 
cmsAD_13.UploadFilePath = ""; 
cmsAD_13.ShowAD();

var isIE=!!window.ActiveXObject; 
if (isIE){

	if (document.readyState=="complete"){
		cmsAD_13.Stat();
	} else {
		document.onreadystatechange=function(){
			if(document.readyState=="complete") cmsAD_13.Stat();
		}
	}
} else {
	cmsAD_13.Stat();
}
document.getElementById('PCMSAD_13').visibility = 'visible';
cmsAD_13.Interval = setInterval(cmsAD_13.Start(cmsAD_13),cmsAD_13.Delay);