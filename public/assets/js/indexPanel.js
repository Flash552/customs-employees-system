
// Start Side Bar
let items = document.querySelectorAll(".sidebar ul li a");
    items.forEach(item => {
      item.addEventListener("click", (e) => {
        let itemActive = document.querySelector(".sidebar ul li .active");
        if(itemActive != null){
            itemActive.classList.remove("active");
        }
          item.classList.add("active");
      })
    })
// End Side Bar

// Start Popup
let popup_btn = document.querySelector(".popup-btn");
if(popup_btn != null){
  popup_btn.addEventListener('click', (e) => {
    let content = document.querySelector(".model-content");
    if(!content.classList.contains('active')){
      content.classList.add('active');
    }
  });
}
let btn_close_pop = document.querySelector('.model-content .btn-close-content');

btn_close_pop.addEventListener('click', e => {

  let content = document.querySelector(".model-content");
    if(content.classList.contains('active')){
      content.classList.remove('active');
    }
})

// End Popup



