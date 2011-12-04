/**
 * jQuery "Fancy Countdown" Plugin
 * 
 * @name jquery-fancyCountdown-1.0.1.js
 * @author Sarpdoruk TAHMAZ - http://www.sarpdoruktahmaz.com
 * @version 1.0.1
 * @date April 20, 2011
 * @category jQuery Plugin Widget
 * @copyright (c) 2011 Sarpdoruk TAHMAZ (sarpdoruktahmaz.com)
 * @license GNU - GENERAL PUBLIC LICENSE - https://github.com/jquery/jquery/blob/master/GPL-LICENSE.txt
 * @info Visit http://www.sarpdoruktahmaz.com/projects/fancy-countdown for more info
 * @Special thanks to Onat ÇELMEN http://www.onatcelmen.com for the plugin idea
**/
(function(a){a.fn.fancyCountdown=function(d){var h=a(this).attr("id"),F={year:2012,month:12,day:12,hour:12,minute:12,second:12,timeReachedMessage:"Hoorraay!!",timeStamps:["Days","Hours","Minutes","Seconds"]},q=["d","h","m","s"],u="",D,C,A,B={blank:"gray",seconds:"green",minutes:"lightblue",hours:"red",days:"orange"},n=new Date(),o=Date.UTC(n.getFullYear(),n.getMonth(),n.getDate(),n.getHours(),n.getMinutes(),n.getSeconds()),f=Date.UTC(F.year,F.month-1,F.day,F.hour,F.minute,F.second),l=f-o,G=l/1000,x,p,E,z,v,J,I,H,s,r,e,c,m,g,t=[[0,1,2,3,4,7,8,11,12,15,16,19,20,23,24,25,26,27],[3,7,11,15,19,23,27],[0,1,2,3,7,11,12,13,14,15,16,20,24,25,26,27],[0,1,2,3,7,11,12,13,14,15,19,23,24,25,26,27],[0,3,4,7,8,11,12,13,14,15,19,23,27],[0,1,2,3,4,8,12,13,14,15,19,23,24,25,26,27],[0,1,2,3,4,8,12,13,14,15,16,19,20,23,24,25,26,27],[0,1,2,3,7,11,15,19,23,27],[0,1,2,3,4,7,8,11,12,13,14,15,16,19,20,23,24,25,26,27],[0,1,2,3,4,7,8,11,12,13,14,15,19,23,24,25,26,27]];if(d){a.extend(F,d)}u+="<table id='fancy-countdown'><tr>";for(C=0;C<q.length;C++){u+="<td>";if(C==0){for(D=1;D<=3;D++){u+="<table id='"+q[C]+D+"'>";for(A=0;A<=27;A++){if(A==0){u+="<tr>"}else{if(A%4==0){u+="</tr><tr>"}}u+="<td id='"+q[C]+D+A+"'></td>";if(A==27){u+="</tr>"}}u+="</table>"}}else{for(D=1;D<=2;D++){u+="<table id='"+q[C]+D+"'>";for(A=0;A<=27;A++){if(A==0){u+="<tr>"}else{if(A%4==0){u+="</tr><tr>"}}u+="<td id='"+q[C]+D+A+"'></td>";if(A==27){u+="</tr>"}}u+="</table>"}}u+="</td>"}u+="</td></tr><tr><td id='d-tx'>"+F.timeStamps[0]+"</td><td>"+F.timeStamps[1]+"</td><td>"+F.timeStamps[2]+"</td><td>"+F.timeStamps[3]+"</td></tr></table>";a(this).append(u);a(this).find("table").css({display:"inline-table"}).attr({cellspacing:"3px"});a("#d1 td,#d2 td,#d3 td,#h1 td,#h2 td,#m1 td,#m2 td,#s1 td,#s2 td").append("<img src='images/gray-ball.png' />");if(l<0){a(this).html("<span id='timeReached'>"+F.timeReachedMessage+"</span>")}else{x=window.setInterval(w,1000)}p=Math.floor(G/86400);G-=(p*86400);E=Math.floor(G/3600);G-=(E*3600);z=Math.floor(G/60);G-=(z*60);v=(G%60);if(parseInt(v)<10){v="0"+v}v=v.toString();m=v.substr(0,1);g=v.substr(1,1);b("s1",m,"seconds");b("s2",g,"seconds");if(parseInt(z)<10){z="0"+z}z=z.toString();e=z.substr(0,1);c=z.substr(1,1);b("m1",e,"minutes");b("m2",c,"minutes");if(parseInt(E)<10){E="0"+E}E=E.toString();s=E.substr(0,1);r=E.substr(1,1);b("h1",s,"hours");b("h2",r,"hours");if(parseInt(p)<100&&parseInt(p)>10){p="0"+p}else{if(parseInt(p)<10){p="00"+p}}p=p.toString();J=p.substr(0,1);I=p.substr(1,1);H=p.substr(2,1);b("d1",J,"days");b("d2",I,"days");b("d3",H,"days");function w(){n=new Date();o=Date.UTC(n.getFullYear(),n.getMonth(),n.getDate(),n.getHours(),n.getMinutes(),n.getSeconds());l=f-o;G=l/1000;if(l<0){a("#"+h).html("<span id='timeReached'>"+F.timeReachedMessage+"</span>");window.clearInterval(x);return false}p=Math.floor(G/86400);G-=(p*86400);E=Math.floor(G/3600);G-=(E*3600);z=Math.floor(G/60);G-=(z*60);v=(G%60);if(parseInt(v)<10){v="0"+v}v=v.toString();m=v.substr(0,1);g=v.substr(1,1);b("s1",m,"seconds");b("s2",g,"seconds");if(m=="5"&&g=="9"){if(parseInt(z)<10){z="0"+z}z=z.toString();e=z.substr(0,1);c=z.substr(1,1);b("m1",e,"minutes");b("m2",c,"minutes");if(e=="5"&&c=="9"){if(parseInt(E)<10){E="0"+E}E=E.toString();s=E.substr(0,1);r=E.substr(1,1);b("h1",s,"hours");b("h2",r,"hours");if(s=="2"&&r=="3"){if(parseInt(p)<100&&parseInt(p)>10){p="0"+p}else{if(parseInt(p)<10){p="00"+p}}p=p.toString();J=p.substr(0,1);I=p.substr(1,1);H=p.substr(2,1);b("d1",J,"days");b("d2",I,"days");b("d3",H,"days")}}}}function b(k,L,j){y(k);L=parseInt(L);for(var K=0;K<=t[L].length;K++){a("#"+k+t[L][K]).find("img").attr("src","images/"+B[j]+"-ball.png")}}function y(j){var L=a("#"+j).attr("id"),k,K=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27];for(k=0;k<K.length;k++){a("#"+L+K[k]).find("img").attr("src","images/"+B.blank+"-ball.png")}}}})(jQuery);