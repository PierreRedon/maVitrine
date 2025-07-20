<template>
    <section class=" py-20 text-white overflow-hidden" id="projet">
        <h2 class="text-3xl font-bold text-center mb-12">Mes projets</h2>
        <div class="carousel-3d">
            <div class="carousel-wrapper" :style="wrapperStyle">
                <div
                    v-for="(projet, index) in projets"
                    :key="index"
                    class="carousel-card"
                    :style="getCardStyle(index)"
                >
                    <div class="card-content">
                        <img :src="projet.image" :alt="projet.titre" class="card-img" />
                        <h3 class="text-base font-bold mt-4 text-white">{{ projet.titre }}</h3>
                        <p class="text-xs text-gray-300 px-3 mt-2">{{ projet.description }}</p>
                        <a v-if="projet.lien" :href="projet.lien" class="text-blue-400 underline text-sm mt-2 block" target="_blank">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'

const projets = [
    {
        titre: "e-Boutique Symfony",
        image: "/img/e-boutique.png",
        description: "Application e-commerce complète : paiement sécurisé, gestion des stocks, transporteurs, emails, SEO, back-office.",
    },
    {
        titre: "CYO – Maquette cliente",
        image: "/img/maquettecouture.png",
        description: "Maquette personnalisée avec une charte graphique existante. Projet non finalisé.",
    },
    {
        titre: "Salon de thé",
        image: "/img/Salonthé.png",
        description: "Expérimentation de styles CSS avancés : animations, transparence et interactions.",
    },
    {
        titre: "Prototype portfolio WP",
        image: "/img/Site%20portfolio%20Wordpress%20Pierre%20REDON.png",
        description: "Prototype WordPress avec limite de personnalisation. Abandonné au profit d’un projet codé à la main.",
    },
    {
        titre: "Le Fiasco – Intégration",
        image: "/img/fiasco.png",
        description: "Projet d’intégration front-end avec SASS, responsive et composants modulaires.",
    }
]

const currentIndex = ref(0)

onMounted(() => {
    setInterval(() => {
        currentIndex.value = (currentIndex.value + 1) % projets.length
    }, 3000)
})

const radius = 750 // pour compenser la plus grande taille des cartes

const cardAngle = 360 / projets.length

// Le wrapper tourne dans le sens inverse pour donner l'impression de stabilité
const wrapperStyle = computed(() => {
    return `transform: translateZ(-${radius}px) rotateY(-${currentIndex.value * cardAngle}deg);`
})

function getCardStyle(index) {
    const angle = index * cardAngle
    return {
        transform: `rotateY(${angle}deg) translateZ(${radius}px)`
    }
}
</script>

<style scoped>
.carousel-3d {
    perspective: 1000px;
    height: 420px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 1s ease-in-out;
}

.carousel-card {
    position: absolute;
    width: 520px;
    height: 420px;
    top: 50%;
    left: 50%;
    transform-style: preserve-3d;
    transform-origin: center center;
    margin: -210px 0 0 -260px; /* centrage vertical et horizontal */
    background-color: #1f2937;
    border-radius: 14px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 6px 6px 0 0;
    image-rendering: auto;
}

.card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 1rem;
    height: 100%;
}

.card-content h3 {
    font-size: 1.5rem; /* 24px */
    font-weight: 700;
    margin-top: 1rem;
    text-align: center;
}

.card-content h3,
.card-content p {
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.7);
}

/* ✅ VERSION MOBILE */
@media (max-width: 768px) {
    .carousel-3d {
        height: auto;
        min-height: 300px;
        padding: 1rem 0;
    }

    .carousel-card {
        width: 90vw;
        max-width: 520px;
        height: auto;
        aspect-ratio: 5 / 4;
        top: 50%;
        left: 50%;
        margin: -50% 0 0 -45vw;
    }

    .card-content h3 {
        font-size: 1.2rem;
    }

    .card-content p {
        font-size: 0.75rem;
    }
}

@media (max-width: 400px) {
    .carousel-card {
        width: 95vw;
        margin-left: -47.5vw;
    }
}

</style>
