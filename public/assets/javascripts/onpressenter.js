function onpress(){
// Get the input field
var input = document.getElementById("terminal");
var csrf =document.getElementById("csrf");
// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
// If the user presses the "Enter" key on the keyboard
if (event.key === "Enter") {
// Cancel the default action, if needed
event.preventDefault();
// stopping listening after run the script
console.log(input.value);
event.stopImmediatePropagation();
//open conexion to pass the artisan comand to kernel
let data = {
    itemid: input.value,
    _token: csrf.value,
};
fetch("http://192.168.18.9:80/terminalcommand", {
method: "post",
headers: { 'Content-Type': 'application/json' },
body: JSON.stringify(data)
}).then(res => {
 
     str = res.text();
     console.log(JSON.stringify(str ));
     return str;
return res.json()
}).then(json => {
console.log(json); // add this line
console.log(json.code);
if(json.code === 200) {
//location.reload();
}else{
console.log('william não é 200');     
}
return
});;



  }
});
}




         