import blogs from "../api/blogs.json" assert {type: 'json'};


const singleBlogDiv = document.querySelector('.signleblog');
const singleBlogAlign = document.querySelector('.signleblog .align');
const blogCardsDiv = document.querySelector('.blog-cards');


(function defaultBlog() {
    blogs.forEach(blogcard => {
        blogCardsDiv.innerHTML += `
            <div class="blgcard" data-id="${blogcard.id}">
                <div class="img">
                    <img src=${blogcard.image} alt="blog-img" />
                </div>

                <div class="blog">
                    <h3>${blogcard.date}</h3>
                    <p>${blogcard.title}</p>
                </div>
            </div>
        `;
    });

    // adding click event to open single blog--------------
    const cards = document.querySelectorAll('.blog-cards .blgcard');
    cards.forEach(card => {
        card.addEventListener('click' , () => {
            // get card id---
            let cardId = card.dataset.id;
            showSingleBlog(cardId);
        });
    });
})();

function showSingleBlog(cardId) {
    singleBlogDiv.style.display = 'block';

    // loop to get wanted data by id
    blogs.forEach(data => {
        if(data.id == cardId) {
            singleBlogAlign.innerHTML = `
                <div class='artical'>
                    <div class="img">
                        <img src=${data.image} alt="food" />
                    </div>
                    <h3>${data.title} ?</h3>
                    <p>${data.text}</p>
                    <ol>
                        <li>${data.point1}</li>
                        <li>${data.point2}</li>
                        <li>${data.point3}</li>
                        <li>${data.point4}</li>
                    </ol>

                    <div class="close">
                        <i class="fa-regular fa-rectangle-xmark"></i>
                    </div>
                </div>
            `;
        }
    });

    const close = document.querySelector('.signleblog .align .artical .close');
    close.addEventListener('click' , () => singleBlogDiv.style.display = 'none');
}
