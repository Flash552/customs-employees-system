    // document.querySelector(".open-popup-btn")
    // .addEventListener('click', () =>{
    //     console.log('click');
    //     document.querySelector('.popup').classList.add('active')
    //     console.log(document.querySelector('.popup'));
    // })
    // document.querySelector(".dismiss-btn")
    // .addEventListener('click', () =>{
    //     document.querySelector('.popup').classList.remove('active')
    // })
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

