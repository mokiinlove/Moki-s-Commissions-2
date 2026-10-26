const ychMenu = document.querySelector(".mini-menu-div-ych");
const ychCards = document.querySelectorAll(".container-ych");

function updateYchMenu(card) {
    ychMenu.querySelector('[data-ych-info="title"]').textContent = card.dataset.title;
    ychMenu.querySelector('[data-ych-info="description"]').textContent = `☆ ${card.dataset.description}`;
    ychMenu.querySelector('[data-ych-info="price"]').textContent = `☆ ${card.dataset.price}`;
    ychMenu.querySelector('[data-ych-info="type"]').textContent = `☆ ${card.dataset.type}`;
    ychMenu.querySelector('[data-ych-info="style"]').textContent = `☆ ${card.dataset.style}`;
}

ychCards.forEach((card) => {
    card.addEventListener("mouseenter", () => updateYchMenu(card));
});
