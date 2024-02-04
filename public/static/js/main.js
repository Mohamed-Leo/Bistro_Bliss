// header list-----------------------------------
function activeList() {
    const custom_meida_nav = document.querySelector('.custom-meida-nav');
    custom_meida_nav.classList.toggle('active-list');
}


// custom-nav---
function close() {
    // const custom_nav_links = document.querySelectorAll('.custom-meida-nav a');
    const list_btn = document.querySelector('.list input');
    const custom_meida_nav = document.querySelector('.custom-meida-nav');

    custom_meida_nav.classNameList.remove('active-list');
    list_btn.checked ?  list_btn.checked = false : '';
    // if(list_btn.checked) list_btn.checked = false;
}



// scroll effect--------------------------------
let sections = document.querySelectorAll(".section");

// check sections for pages--------------------
if(sections) {
    window.onscroll = () => {
        sections.forEach( sec  => {
            let top = window.scrollY;
            let offset = sec.offsetTop -150;
            let height = sec.offsetHeight;

            if (top >= offset && top < offset + height) {
                sec.classList.add("show-animate");
            }
            // else {
            //     sec.classList.remove("show-animate");
            // }
        });
    }
};








//up button page ----------------------------------------------------------------------------
let upbtn = document.getElementById("upbtn");
window.addEventListener('scroll', () => {
    if (scrollY >= 1000) {
        console.log('yes');
        upbtn.style.display = "block";
    }
    else {
        upbtn.style.display = "none";
    }
});
upbtn.onclick = () => {
    scroll({
        top : 0,
        behavior : "smooth"
    })
};


// loader-----------------------------
$(document).ready(() => {
    $('.loader-con').fadeOut(1500);
});



