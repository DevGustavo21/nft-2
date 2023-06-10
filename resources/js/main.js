const wrappers = document.querySelectorAll('.wrapper_like');

wrappers.forEach((wrapper) => {
    const likeButton = wrapper.querySelector('.wrapper_li');
    const imgLike = wrapper.querySelector('.like_img');
    const countElement = wrapper.querySelector('.count');
    let isLiked = false;
    let count = 0; // Valor inicial del contador

    likeButton.addEventListener('click', () => {
        if (!isLiked) {
            likeButton.style.backgroundColor = 'white';
            likeButton.style.color = '#14141F';
            imgLike.style.filter= 'invert(100%)';
            isLiked = true;
            count++;
        } else {
            likeButton.style.backgroundColor = '#14141F';
            likeButton.style.color = 'white';
            imgLike.style.filter= 'invert(0%)';
            isLiked = false;
            count--;
        }

        countElement.textContent = count;
    });
});
