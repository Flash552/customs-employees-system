
// Start Side Bar
let items = document.querySelectorAll(".page .sidebar ul li");
    items.forEach(item => {
      item.addEventListener("click", (e) => {
        document.querySelector("#iframe-side-bar").setAttribute("src", item.getAttribute("data-set"));
        let itemActive =  document.querySelector(".page .sidebar ul li.active");
        console.log(itemActive);
        itemActive.classList.remove("active");
        item.classList.add("active");
      })

    })
// End Side Bar

// Start Nav Bar
let nave_items = document.querySelectorAll(".content-wrapper div .nav-tabs li");
    nave_items.forEach(item => {
      item.addEventListener("click", (e) => {
        document.querySelector("#iframe-nav-bar").setAttribute("src", item.getAttribute("data-set"));
        let itemActive =  document.querySelector(".content-wrapper div .nav-tabs li.active");
        console.log(itemActive);
        itemActive.classList.remove("active");
        item.classList.add("active");
      })

    })
// End Nave Bar



