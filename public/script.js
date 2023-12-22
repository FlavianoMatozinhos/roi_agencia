function userScroll() {
    const navbar = document.querySelector(".navbar");
    const toTopBtn = document.querySelector("#to-top");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("navbar-sticky");
            toTopBtn.classList.add("show");
        } else {
            navbar.classList.remove("contact");
            toTopBtn.classList.remove("show");
        }
    });
}

function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function incrementStats() {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
        counter.innerText = 0;

        const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const c = +counter.innerText;

            const increment = target / 200;

            if (c < target) {
                counter.innerText = Math.ceil(c + increment);
                setTimeout(updateCounter, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
}

// Event Listeners
document.addEventListener("DOMContentLoaded", userScroll);
document.addEventListener("DOMContentLoaded", incrementStats);
document.querySelector("#to-top").addEventListener("click", scrollToTop);

document.addEventListener("DOMContentLoaded", function () {
    const boxes = document.querySelectorAll(".box");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        },
        { threshold: 0.5 }
    ); // Ajuste o valor do threshold conforme necessário

    boxes.forEach((box) => {
        observer.observe(box);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Intercepta os cliques nos links e rola suavemente até a seção correspondente
    document
        .getElementById("home-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            document
                .getElementById("home")
                .scrollIntoView({ behavior: "smooth" });
        });

    document
        .getElementById("sobre-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            document
                .getElementById("sobre")
                .scrollIntoView({ behavior: "smooth" });
        });

    document
        .getElementById("equipe-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            document
                .getElementById("equipe")
                .scrollIntoView({ behavior: "smooth" });
        });

    document
        .getElementById("contato-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            document
                .getElementById("contato")
                .scrollIntoView({ behavior: "smooth" });
        });

    document
        .getElementById("duvida-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            document
                .getElementById("duvida")
                .scrollIntoView({ behavior: "smooth" });
        });
});

window.onload = function () {
    window.scrollTo(0, 0);
};
