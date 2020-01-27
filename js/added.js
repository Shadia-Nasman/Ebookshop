
var addedbook = sessionStorage.getItem("jsonresponse");
console.log(addedbook);
var bookjson = JSON.parse(addedbook);
document.getElementById("bkprice").innerHTML = bookjson.price;
document.getElementById("bkimg").src = bookjson.photo;
document.getElementById("bktitle").innerHTML = bookjson.title;
document.getElementById("bktype").innerHTML = bookjson.type;
