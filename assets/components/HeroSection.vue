<script setup>
import { onMounted } from 'vue'
import { gsap } from 'gsap'

// Animation GSAP sur les blocs
onMounted(() => {
    gsap.from(".hero-text", {
        x: -60,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    })

    gsap.from(".hero-image", {
        x: 60,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        delay: 0.3
    })
})

// Scroll vers contact
function scrollToContact() {
    const el = document.querySelector("#contact")
    if (el) el.scrollIntoView({ behavior: "smooth" })
}
</script>

<template>
    <section id="hero" class="relative text-white bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 px-6 py-24 overflow-hidden">
        <!-- Canvas décoratif -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <canvas id="glow-line"></canvas>
        </div>

        <!-- Contenu -->
        <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Texte -->
            <div class="hero-text space-y-6">
                <h1 class="text-5xl sm:text-6xl font-extrabold leading-tight tracking-tight">
                    Bonjour, je suis <span class="text-blue-500">Pierre REDON</span>
                </h1>
                <h2 class="text-xl text-gray-300">
                    Développeur web passionné par l’innovation numérique.
                </h2>
                <p class="text-md text-gray-400 max-w-xl">
                    Mon objectif ? Créer des expériences web performantes, élégantes et humaines.
                    J’aime allier <strong>technologie</strong> et <strong>créativité</strong> pour donner vie à des projets à fort impact.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a
                        href="#contact"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg shadow-lg transition hover:scale-105 duration-300"
                    >
                        Me contacter
                    </a>
                    <a
                        href="#competences"
                        class="text-white border border-white hover:bg-white hover:text-black px-6 py-2 rounded-lg transition hover:scale-105 duration-300"
                    >
                        Voir mes compétences
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="hero-image flex justify-center">
                <img
                    src="/img/image.png"
                    alt="Pierre Redon"
                    class="rounded-full border-4 border-blue-500 shadow-xl max-w-[280px] md:max-w-sm hover:scale-105 transition duration-500"
                />
            </div>
        </div>
    </section>
</template>


<style scoped>
@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-fade-in-left {
    animation: fadeInLeft 0.8s ease-out forwards;
    opacity: 0;
}

.animate-fade-in-right {
    animation: fadeInRight 0.8s ease-out forwards;
    opacity: 0;
}
</style>
