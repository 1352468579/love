function settab_zzjssb(name,num,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById(name+"_"+"zzjssb"+i);
  menu.className=i==num?"on_zzjssb":"";
    con.style.display=i==num?"block":"none";
 }
}
function settab_zzjssc(name,num,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById(name+"_"+"zzjssc"+i);
  menu.className=i==num?"on_zzjssc":"";
    con.style.display=i==num?"block":"none";
 }
}
function settab_zzjsse(name,num,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById(name+"_"+"zzjsse"+i);
  menu.className=i==num?"on_zzjsse":"";
    con.style.display=i==num?"block":"none";
 }
}