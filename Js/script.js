let count = 0;
function darkMode() {
  count++;
  if (count % 2 == 1) {
    let body = document.body;
    let sidebar = document.getElementById("sidebar");
    let list = document.getElementById("list");
    let usuario = document.getElementById("user");
    let major =  document.getElementById("major");
  
    
    body.setAttribute("data-bs-theme", "dark");
    sidebar.style = "background-color: #000000; margin";
    list.style = "color:white";
    usuario.style = "color:white";
    major.style = "color: white"
   
  } 
    
  else {
    let body = document.body;
    let sidebar = document.getElementById("sidebar");
    let list = document.getElementById("list");
    let usuario = document.getElementById("user");
    let major =  document.getElementById("major");
   
    
    body.removeAttribute("data-bs-theme", "dark");
    sidebar.style.removeProperty("background-color");
    list.style = "color:black";
    usuario.style = "color:black";
    major.style = "color:black" 
      
}
  console.log(count);
}
