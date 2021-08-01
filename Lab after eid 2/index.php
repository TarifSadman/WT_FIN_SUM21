<script>
function get(id){
return document.getElementById(id);
}
function loadDoc(){
var xhr = new XMLHttprequest();
xhr.open("GET","my_profile.php",true);
xhr.onredystatechange=function(){
if(this.readystate == 4 && this.status == 200){
get("demo").innerHTML = this.responseText;
}
};
xhr.send();
}
</script>
<button onclick = "loadDoc()">Click me</button>
<div id="demo"></div>