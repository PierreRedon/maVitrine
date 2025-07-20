<template>
    <section class="px-6 py-20 bg-[#0B0F1A] text-white" id="apropos">
        <div class="max-w-5xl mx-auto text-center space-y-10">
            <h2 class="text-4xl font-extrabold">À propos de moi</h2>
            <p class="text-gray-300 text-lg leading-relaxed max-w-3xl mx-auto">
                Infirmier de formation, développeur par passion, je suis un homme de terrain qui aime comprendre, apprendre et créer. Ma force, c’est de mêler empathie, rigueur et créativité pour transformer les idées en projets concrets. Aujourd’hui, je me spécialise en développement fullstack avec une vision claire : proposer des solutions humaines, modernes et efficaces.
            </p>
        </div>

        <div class="mt-20 grid md:grid-cols-3 gap-12 max-w-6xl mx-auto text-gray-300">
            <!-- Bloc 1 -->
            <div class="space-y-4 text-center">
                <div class="flex justify-center">
                    <div class="bg-blue-600 rounded-full p-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4Zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold">Soignant à l’écoute</h3>
                <p>
                    Plusieurs années au service des autres en tant qu’infirmier m’ont forgé : sens des priorités, calme sous pression, travail en équipe. J’ai appris à comprendre les besoins réels des gens, à agir concrètement.
                </p>
            </div>

            <!-- Bloc 2 -->
            <div class="space-y-4 text-center">
                <div class="flex justify-center">
                    <div class="bg-blue-600 rounded-full p-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5 4v3h5.5v12h3V7H19V4z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold">Autodidacte passionné</h3>
                <p>
                    J’ai commencé à coder seul, par curiosité. Puis j’ai tout absorbé : HTML, CSS, Symfony, JavaScript, SQL, React, Vue… J’apprends vite, avec méthode, et je transforme mes connaissances en projets concrets.
                </p>
            </div>

            <!-- Bloc 3 -->
            <div class="space-y-4 text-center">
                <div class="flex justify-center">
                    <div class="bg-blue-600 rounded-full p-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 15h-2v-2h2Zm0-4h-2V7h2Z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold">Développeur en quête de sens</h3>
                <p>
                    Aujourd’hui, je développe des projets ambitieux (e-commerce, plateforme web, jeu vidéo…) en conciliant performance technique et utilité réelle. J’aime créer des interfaces belles, claires et efficaces, avec une attention au détail.
                </p>
            </div>
        </div>

        <!-- Bloc perso + citation -->
        <div class="mt-20 max-w-3xl mx-auto text-center text-gray-400 italic text-lg">
            « Je veux coder des choses utiles, belles, et humaines. Mon moteur, c’est l’envie d’apprendre, de transmettre, et de construire du concret. »
        </div>
    </section>
</template>
