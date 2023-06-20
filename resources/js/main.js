const wrappers = document.querySelectorAll('.wrapper_like');

wrappers.forEach((wrapper) => {
    const likeButton = wrapper.querySelector('.wrapper_li');
    const imgLike = wrapper.querySelector('.like_img');
    const countElement = wrapper.querySelector('.count');
    const itemID = wrapper.dataset.itemId; // Obtén el ID del item desde el atributo data
    let isLiked = false;

    likeButton.addEventListener('click', () => {
        // Realiza una solicitud AJAX para obtener el contador total de likes
        fetch(`/items/${itemID}/total-likes`)
            .then(response => response.json())
            .then(data => {
                countElement.textContent = data.totalLikes;
            });

        // Resto del código para cambiar la apariencia del botón como desees
        if (!isLiked) {
            likeButton.style.backgroundColor = 'white';
            likeButton.style.color = '#14141F';
            imgLike.style.filter= 'invert(100%)';
            isLiked = true;
        } else {
            likeButton.style.backgroundColor = '#14141F';
            likeButton.style.color = 'white';
            imgLike.style.filter= 'invert(0%)';
            isLiked = false;
        }
    });
});



const exploreBtn = document.querySelector('.explore')
const exploreBox = document.querySelector('.exploreBox')
const activityBtn = document.querySelector('.activity')
const activityBox = document.querySelector('.activityBox')


exploreBtn.addEventListener('click', () => {
    if (exploreBox.style.display === 'flex') {
        exploreBox.style.display = 'none';
        exploreBox.style.transition = '300ms ease-in-out'
    } else {
        exploreBox.style.display = 'flex';
    }
});

activityBtn.addEventListener('click', () => {
    if (activityBox.style.display === 'flex') {
        activityBox.style.display = 'none';
        activityBox.style.transition = '300ms ease-in-out'
    } else {
        activityBox.style.display = 'flex';
    }
});
