const ychMenu = document.querySelector(".mini-menu-div-ych");
const ychCards = document.querySelectorAll(".container-ych");

function updateYchMenu(card) {
    const image = ychMenu.querySelector('[data-ych-info="image"]');

    ychMenu.querySelector('[data-ych-info="title"]').textContent = card.dataset.title;
    ychMenu.querySelector('[data-ych-info="description"]').textContent = card.dataset.description ? `☆ ${card.dataset.description}` : "";
    ychMenu.querySelector('[data-ych-info="price"]').textContent = card.dataset.price ? `☆ ${card.dataset.price}` : "";
    ychMenu.querySelector('[data-ych-info="type"]').textContent = card.dataset.type ? `☆ ${card.dataset.type}` : "";
    ychMenu.querySelector('[data-ych-info="style"]').textContent = card.dataset.style ? `☆ ${card.dataset.style}` : "";
    image.src = card.dataset.image;
}

ychCards.forEach((card) => {
    card.addEventListener("mouseenter", () => updateYchMenu(card));
});
