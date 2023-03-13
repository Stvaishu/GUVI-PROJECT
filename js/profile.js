
let res = JSON.parse(localStorage.getItem("Auth"));
document.getElementById("porifile-email").innerText = res.email;

$(function(){
    $("#nav-placeholder").load("index.html");
  });
