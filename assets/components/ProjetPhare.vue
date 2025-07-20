<template>
    <section id="Projetphare" class="dark:bg-gray-900 py-24 px-6 text-white">
        <div class="max-w-6xl mx-auto space-y-20">

            <!-- Titre principal -->
            <div class="text-center space-y-6">
                <h2 class="text-5xl font-extrabold">
                    Mon projet <span class="text-yellow-400">PHARE</span>
                </h2>
                <a
                    href="https://www.belleepoqueocean.com/"
                    target="_blank"
                    rel="noopener"
                    class="inline-block text-xl text-blue-300 hover:text-yellow-300 underline underline-offset-4 transition duration-300"
                >
                    www.belleepoqueocean.com
                </a>
            </div>

            <!-- Bloc principal (Vidéo + Carousel + Texte) -->
            <div class="grid lg:grid-cols-3 gap-10 items-start">
                <!-- Vidéo principale -->
                <div class="col-span-1">
                    <video
                        controls
                        class="rounded-2xl shadow-lg w-full h-64 object-cover ring-2 ring-yellow-400/50"
                    >
                        <source src="/img/BE.mp4" type="video/mp4" />
                        Votre navigateur ne supporte pas la vidéo.
                    </video>
                </div>

                <!-- Carousel -->
                <div class="col-span-1">
                    <div class="relative h-64 overflow-hidden rounded-2xl ring-1 ring-white/20" id="carousel-v1" data-carousel="slide">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/img/maquette.png" class="w-full h-full object-contain" alt="Maquette 1" />
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/img/maquette2.png" class="w-full h-full object-contain" alt="Maquette 2" />
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/img/designLogo.png" class="w-full h-full object-contain" alt="Logo" />
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/img/organigram.png" class="w-full h-full object-contain" alt="Organigramme" />
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/img/reservation.png" class="w-full h-full object-contain" alt="Réservation" />
                        </div>

                        <!-- Bullets -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-2 left-1/2 space-x-2">
                            <button type="button" class="w-2.5 h-2.5 rounded-full bg-white/50" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-2.5 h-2.5 rounded-full bg-white/50" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-2.5 h-2.5 rounded-full bg-white/50" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-2.5 h-2.5 rounded-full bg-white/50" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-2.5 h-2.5 rounded-full bg-white/50" data-carousel-slide-to="4"></button>
                        </div>

                        <!-- Controls -->
                        <button class="absolute top-0 left-0 z-30 h-full px-4 flex items-center justify-center" data-carousel-prev>
                            <span class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center">‹</span>
                        </button>
                        <button class="absolute top-0 right-0 z-30 h-full px-4 flex items-center justify-center" data-carousel-next>
                            <span class="w-8 h-8 bg-white/30 rounded-full flex items-center justify-center">›</span>
                        </button>
                    </div>
                </div>

                <!-- Texte -->
                <div class="col-span-1 space-y-4 text-gray-300">
                    <h3 class="text-2xl font-semibold text-white">Genèse du projet</h3>
                    <p>
                        Ce site a été développé en autonomie complète : design, développement, mise en ligne, SEO et maintenance.
                        Il propose un système de réservation, un QR code sur les tables du restaurant, un back-office intuitif, et plus encore.
                    </p>
                    <p>
                        Le carousel met en avant les maquettes Figma, le design du logo, l’organigramme, et les fonctionnalités clés du projet.
                    </p>
                </div>
            </div>

            <!-- Refonte v2 -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="space-y-4 text-gray-300">
                    <h3 class="text-2xl font-semibold text-white">Refonte graphique</h3>
                    <p>
                        Une nouvelle version du site a été proposée avec un design plus moderne et responsive,
                        simplifiant l’expérience utilisateur tout en répondant à de nouveaux besoins client.
                    </p>
                </div>
                <video
                    controls
                    class="rounded-2xl w-full h-72 object-cover shadow-xl ring-1 ring-white/10"
                >
                    <source src="/img/BE2.mp4" type="video/mp4" />
                    Votre navigateur ne supporte pas la vidéo.
                </video>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Tu peux ajouter ici des effets GSAP ou fade-in avec IntersectionObserver si tu veux */
</style>
<script setup lang="ts">
</script>
