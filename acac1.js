uagent = window.navigator.userAgent.toLowerCase();IEB=(uagent.indexOf('msie') != -1)?true:false;var scompat = document.compatMode;var ac1intcomplate=0;ac1imgarr=new Array();ac1altarr=new Array();ac1linkarr=new Array();ac1targetarr=new Array();ac1titarr=new Array();ac1desarr=new Array();ac1imgarr[0]="";ac1altarr[0]="";ac1linkarr[0]="";ac1targetarr[0]="";ac1titarr[0]="";ac1desarr[0]="";ac1imgarr[1]="social.jpg";ac1altarr[1]="";ac1linkarr[1]="http://localhost/chosenone/social.php";ac1targetarr[1]="_self";ac1titarr[1]="Social Sector";ac1desarr[1]="";ac1imgarr[2]="development1.jpg";ac1altarr[2]="";ac1linkarr[2]="http://localhost/chosenone/development.php";ac1targetarr[2]="_self";ac1titarr[2]="Development Sector";ac1desarr[2]="";ac1imgarr[3]="economic.jpg";ac1altarr[3]="";ac1linkarr[3]="http://localhost/chosenone/index.php";ac1targetarr[3]="_self";ac1titarr[3]="Economic Sector";ac1desarr[3]="";ac1imgarr[4]="infra2.jpg";ac1altarr[4]="";ac1linkarr[4]="http://localhost/chosenone/infra.php";ac1targetarr[4]="_self";ac1titarr[4]="Infrastructure Sector";ac1desarr[4]="";var gnrated='';var ac1stepcount=20;var ac1currstep=10;var ac1timeo=null;var ac1horvert=0;var ac1llllll=0;var ac1lllllll=0;var ac1llllllll=0;var ac1ll=new Array();var ac1lll=new Array();var ac1llll=new Array();var ac1startposx=new Array();var ac1lllll=new Array();var i=0;var ac1lllllllll=0;var ac1DescCalcLeftBir=0;var ac1DescCalcLeft=0;var ac1DescCalcWidth=0;var ac1DescCalcHeight=0;var ac1DescCalcIcWidth=0;var ac1DescCalcIcHeight=0;var ac1hpiece='';var ac1ds="";var ac1IEDescOpacity=100;var ac1FFOpacity=1.0;var ac1DescFadeEffectTimer=null;var ac1AutoPlayTimer=null;var ac1AutoPlayCurrent=1;var ac1icerdemi=0;function ac1WriteDesc(){	if(ac1linkarr[i].length>2){ac1ds=ac1ds+'<a href="'+ac1linkarr[i]+'" target="'+ac1targetarr[i]+'" style="text-decoration:none;">';}	ac1ds=ac1ds+'<div id="ac1adesc'+i+'" style="position:absolute;top:'+100+'px;left:0px;width:'+ac1DescCalcWidth+'px;height:'+ac1DescCalcHeight+'px;visibility:hidden;overflow:hidden;cursor:pointer;filter:alpha(opacity=100);opacity:1.00;" onMouseOut="ac1outall()">';	ac1ds=ac1ds+'<div style="position:absolute;left:0px;top:0px;width:'+ac1DescCalcWidth+'px;height:'+ac1DescCalcHeight+'px;border-style:solid;border-width:0px;border-color:#000000;background-color:#'+'000000'+';opacity: '+0.50+';filter:alpha(opacity='+50+');" onMouseOut="ac1outall()"></div>';	ac1ds=ac1ds+'<div style="position:relative;left:0px;top:0px;width:'+ac1DescCalcIcWidth+';height:'+ac1DescCalcIcHeight+'px;text-align:'+'left'+';overflow:hidden;padding:'+3+'px;border-style:'+'solid'+';border-width:'+2+'px;border-color:#'+'990000'+';color:#'+'FFFFFF'+';font-family:'+'Courier New'+';font-style:'+'normal'+';font-size: '+100+';font-weight:'+'bold'+';text-decoration:'+'none'+';opacity: 1.0;filter:alpha(opacity=100);" onMouseOut="ac1outall()">';	ac1ds=ac1ds+'<span style="color:#'+'FF8040'+';font-family:'+'Courier New'+';font-style:'+'normal'+';font-size: '+100+';font-weight:'+'bold'+';text-decoration:'+'none'+';" onMouseOut="ac1outall()">'+ac1titarr[i]+'</span>';	if(ac1titarr[i].length>0){ac1ds=ac1ds+'<br />';}			ac1ds=ac1ds+''+ac1desarr[i];	ac1ds=ac1ds+'</div>';	ac1ds=ac1ds+'</div>';	if(ac1linkarr[i].length>2){ac1ds=ac1ds+'</a>';}}function ac1init_doc(fstr,hormuvertmi){	ac1DescCalcLeftBir=5;		if((0==0)&&(ac1horvert==0))	{		ac1DescCalcLeft=5+2;	}	else	{		ac1DescCalcLeft=5;	}	if(0==0)	{		ac1DescCalcWidth=320-5-5;	}	else	{		ac1DescCalcWidth=900-5-5;	}	if((ac1horvert==1)&&(0==1))	{		ac1DescCalcHeight=200-100-5;	}	else	{		ac1DescCalcHeight=200-100-5;	}	if((IEB==true)&&(scompat == "BackCompat" ))	{		ac1DescCalcIcWidth=ac1DescCalcWidth;		ac1DescCalcIcHeight=ac1DescCalcHeight;	}	else	{		ac1DescCalcIcWidth=ac1DescCalcWidth-2*(2)-2*(3);		ac1DescCalcIcHeight=ac1DescCalcHeight-2*(2)-2*(3);	}	ac1folderset=fstr;	var tmpleftpad=0;	var tmptoppad=0;	ac1hpiece=ac1hpiece+'<div style="position:relative;width:'+900+'px;height:'+200+'px;border-style:solid;border-width:'+0+'px;border-color:#'+'666666'+';">';	ac1hpiece=ac1hpiece+'<div style="position:relative;width:'+900+'px;height:'+200+'px;overflow:hidden;border-style:solid;border-width:0px;border-color:#FFFFFF;cursor:default;" onMouseOver="ac1outall()" onMouseOut="ac1mouse_divout()">';	if(0==1)	{		for(i=1;i<=4;i++) 		{			ac1WriteDesc();		}	}	for(i=1;i<=4;i++)	{		if(ac1horvert==0)		{			if(i==1){tmpleftpad=0;}else{tmpleftpad=2;}			tmptoppad=0;		}		else		{			tmpleftpad=0;			if(i==1){tmptoppad=0;}else{tmptoppad=2;}		}		gnrated=gnrated+'<div id="ac1po'+i+'" style="position:absolute;left:0px;top:0px;" onMouseOver="ac1mouse_over('+i+')" onMouseOut="ac1outall()"><div style="background-color:#FFFFFF;padding-left:'+tmpleftpad+'px;padding-top:'+tmptoppad+'px;"><a href="'+ac1linkarr[i]+'" target="'+ac1targetarr[i]+'"><img width="'+320+'" height="'+200+'" src="'+ac1folderset+ac1imgarr[i]+'" style="border-style:solid;border-width:0px;" TITLE="'+ac1altarr[i]+'"></img></a>';		if(0==0)		{			ac1ds="";			ac1WriteDesc();			gnrated=gnrated+ac1ds;		}		gnrated=gnrated+'</div></div>';	}	ac1hpiece=ac1hpiece+gnrated;	if(0==1)	{		ac1hpiece=ac1hpiece+ac1ds;	}	ac1hpiece=ac1hpiece+'</div>';	ac1hpiece=ac1hpiece+'</div>';	document.write(''+ac1hpiece);	setTimeout("ac1init_position("+parseInt(hormuvertmi)+")",50);}function ac1init_position(hv){	ac1horvert=hv;	for(i=1;i<=4;i++)	{		ac1ll[i]=document.getElementById('ac1po'+i);		ac1lll[i]=document.getElementById('ac1adesc'+i);		if((ac1ll[i]==null)||(ac1lll[i]==null))		{		    setTimeout("ac1init_position("+parseInt(hv)+")",200);		    return;		}	}		if(ac1horvert==0)	{		ac1llllll=parseInt(     (900-((4-1)*2))     /(4));		ac1lllllll=ac1llllll+2;		ac1llllllll=parseInt(((900-320)/(4-1)));	}	else	{		ac1llllll=parseInt(     (280-((4-1)*2))     /(4));		ac1lllllll=ac1llllll+2;		ac1llllllll=parseInt(((280-200)/(4-1)));	}	for(i=1;i<=4;i++)	{		ac1ll[i]=document.getElementById('ac1po'+i);		sx=(ac1lllllll*(i-1))-2;		if(ac1horvert==0)		{			if(i==1)			{				ac1ll[i].style.left="0px";			}			else			{				ac1ll[i].style.left=""+sx+"px";			}		}		else		{			if(i==1)			{				ac1ll[i].style.top="0px";			}			else			{				ac1ll[i].style.top=""+sx+"px";			}		}		ac1startposx[i]=sx;		ac1lllll[i]=ac1startposx[i];		if(i==1)		{			ac1lll[i].style.left=""+ac1DescCalcLeftBir+"px";		}		else		{			ac1lll[i].style.left=""+ac1DescCalcLeft+"px";		}			}	ac1intcomplate=1;	if(0==1)	{		ac1DoAutoPlay();	}}function ac1DoAutoPlay(){	ac1mouse_over(ac1AutoPlayCurrent);	ac1AutoPlayCurrent=ac1AutoPlayCurrent+1;	if(ac1AutoPlayCurrent>4)	{		ac1AutoPlayCurrent=1;	}	ac1AutoPlayTimer=setTimeout("ac1DoAutoPlay()",4000);}function ac1do_FadeAnim(){	if(ac1lllllllll<1)	{		return;	}	ac1IEDescOpacity=ac1IEDescOpacity+5;	ac1FFOpacity=ac1FFOpacity+0.05;	if(IEB==true)	{		if(ac1IEDescOpacity>100)		{			ac1IEDescOpacity=100;			return;		}	}	else	{		if(ac1FFOpacity>1.00)		{			ac1FFOpacity=1.00;			return;		}	}	if(IEB==true)	{		ac1lll[ac1lllllllll].filters.item(0).opacity=ac1IEDescOpacity;	}	else	{		ac1lll[ac1lllllllll].style.opacity = ac1FFOpacity;	}	ac1DescFadeEffectTimer=setTimeout("ac1do_FadeAnim()",20);}function ac1do_anim(){	if(ac1currstep<=0)	{		if(ac1lllllllll>=1)		{			if(ac1horvert==0)			{				if(ac1lllllllll==1)				{					ac1lll[ac1lllllllll].style.left=""+ac1DescCalcLeftBir+"px";				}				else				{					ac1lll[ac1lllllllll].style.left=""+ac1DescCalcLeft+"px";				}			}			else			{				if(0==0)				{					ac1lll[ac1lllllllll].style.left=""+(ac1DescCalcLeft+parseInt(ac1ll[ac1lllllllll].style.left))+"px";					var DesvertTop=0;					if((ac1lllllllll>1) &&(ac1lllllllll!=4)){DesvertTop=100+2;}else{DesvertTop=100;}					ac1lll[ac1lllllllll].style.top=""+(DesvertTop)+"px";				}				else				{					ac1lll[ac1lllllllll].style.left=""+(ac1DescCalcLeft)+"px";					ac1lll[ac1lllllllll].style.top=""+100+"px";				}			}			if((ac1titarr[ac1lllllllll].length>0)||(ac1desarr[ac1lllllllll].length>0))			{				if(1==2)				{					ac1IEDescOpacity=0;					ac1FFOpacity=0.00;					ac1do_FadeAnim();					ac1lll[ac1lllllllll].style.visibility="visible";				}				else				{					ac1lll[ac1lllllllll].style.visibility="visible";				}			}			else			{				ac1lll[ac1lllllllll].style.visibility="hidden";			}		}		return;	}	for(i=2;i<=4;i++)	{		ac1lllll[i] = parseInt(ac1lllll[i])+parseInt((ac1llll[i]-ac1lllll[i])/ac1currstep);		if(ac1horvert==0)		{			ac1ll[i].style.left=""+ac1lllll[i]+"px";		}		else		{			ac1ll[i].style.top=""+ac1lllll[i]+"px";		}	}	if((1==1)&&(ac1lllllllll>=1))	{		var dtop=0;		if((ac1titarr[ac1lllllllll].length>0)||(ac1desarr[ac1lllllllll].length>0))		{    		ac1lll[ac1lllllllll].style.visibility="visible";        }        else        {            ac1lll[ac1lllllllll].style.visibility="hidden";        }		dtop= 100+        parseInt(ac1DescCalcHeight-      ((ac1DescCalcHeight/ac1stepcount)*(ac1stepcount-(ac1currstep-1)))         );		ac1lll[ac1lllllllll].style.top=""+dtop+"px";	}	ac1currstep--;	setTimeout("ac1do_anim()",20);}function ac1reposition(g){	for(i=1;i<=4;i++)	{		if(i<=g)		{			if(i==1)			{				ac1llll[i]=0;			}			else			{				ac1llll[i]=parseInt(((i-1)*ac1llllllll)-2);			}		}		else		{			oncekix=0;			for(j=1;j<(i-1);j++)			{				oncekix=oncekix+ac1llllllll;			}			if(ac1horvert==0)			{				ac1llll[i]=parseInt(((320)+(oncekix)));			}			else			{				ac1llll[i]=parseInt(((200)+(oncekix)));			}		}			}	if((ac1horvert==0)&&(4==g))	{		var bul1=ac1llll[4]+2+320;		var bul2=900-bul1;		ac1llll[4]=ac1llll[4]+bul2;	}	if((ac1horvert==1)&&(4==g))	{		var bul1=ac1llll[4]+2+200;		var bul2=200-bul1;		ac1llll[4]=ac1llll[4]+bul2;	}	ac1currstep=ac1stepcount;	ac1do_anim();}function ac1mouse_over(g){	if(ac1intcomplate==0){return;}	if(g==ac1lllllllll){return;}	ac1lllllllll=g;	clearTimeout(ac1timeo);	if(0==1){if(ac1icerdemi==1){clearTimeout(ac1AutoPlayTimer);}}	for(i=1;i<=4;i++)	{		if(i!=g)		{			ac1lll[i].style.visibility="hidden";			if(IEB==true)			{				ac1lll[i].filters.item(0).opacity=100;			}			else			{				ac1lll[i].style.opacity = 1.0;			}		}	}	ac1reposition(g);}function ac1outall(){	ac1icerdemi=1;	clearTimeout(ac1AutoPlayTimer);	clearTimeout(ac1timeo);}function ac1mouse_divout2(){	ac1icerdemi=0;	clearTimeout(ac1timeo);	if(0==1)	{		clearTimeout(ac1AutoPlayTimer);		ac1AutoPlayCurrent=1;		ac1DoAutoPlay();	}	else	{	for(i=1;i<=4;i++)	{		ac1lll[i].style.visibility="hidden";	}	for(i=1;i<=4;i++)	{		sx=(ac1lllllll*(i-1))-2;		if(i==1)		{			ac1llll[i]=0;		}		else		{			ac1llll[i]=sx;		}			}	ac1lllllllll=-1;	ac1currstep=ac1stepcount;	ac1do_anim();	}}function ac1mouse_divout(){	clearTimeout(ac1timeo);	ac1timeo=setTimeout("ac1mouse_divout2()",300);}