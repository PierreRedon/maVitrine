<script setup lang="ts">

</script>

<template>
    <footer class="bg-[#0B0F1A] text-gray-300 mt-auto">
        <div class="container mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Copyright -->
            <p class="text-sm">&copy; {{ new Date().getFullYear() }} Pierre Redon. Tous droits réservés.</p>

            <!-- Liens de navigation -->
            <nav class="flex flex-wrap gap-4 text-sm">
                <a href="#apropos" class="hover:text-white transition">À propos</a>
                <a href="#projet" class="hover:text-white transition">Projets</a>
                <a href="#competences" class="hover:text-white transition">Compétences</a>
                <a href="#contact" class="hover:text-white transition">Contact</a>
            </nav>

            <!-- Réseaux sociaux -->
            <div class="flex gap-4">
                <a href="https://github.com/ton-profil" target="_blank" aria-label="GitHub" class="hover:text-white transition">
                    <!-- Icône GitHub -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 0a12 12 0 0 0-3.8 23.4c.6.1.8-.2.8-.5v-2c-3.3.7-4-1.6-4-1.6a3.1 3.1 0 0 0-1.3-1.7c-1-.7.1-.7.1-.7a2.5 2.5 0 0 1 1.8 1.2 2.6 2.6 0 0 0 3.6 1 2.6 2.6 0 0 1 .8-1.6c-2.7-.3-5.5-1.4-5.5-6A4.7 4.7 0 0 1 6 6.5 4.4 4.4 0 0 1 6.1 3.1s1-.3 3.2 1.2a10.8 10.8 0 0 1 5.8 0C17.3 2.8 18.3 3 18.3 3a4.4 4.4 0 0 1 .1 3.4 4.7 4.7 0 0 1 1.2 3.3c0 4.6-2.8 5.7-5.5 6a2.9 2.9 0 0 1 .8 2.3v3.4c0 .3.2.6.8.5A12 12 0 0 0 12 0z"/>
                    </svg>
                </a>
                <a href="https://linkedin.com/in/ton-profil" target="_blank" aria-label="LinkedIn" class="hover:text-white transition">
                    <!-- Icône LinkedIn -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M4.98 3.5A2.5 2.5 0 1 1 2.5 6a2.5 2.5 0 0 1 2.48-2.5zm.02 4.5H2V21h3V8zm7.5 0h-3v13h3v-7c0-1.5.5-2.5 2-2.5s1.7 1.2 1.7 2.7V21h3v-7.5c0-3.2-1.7-4.7-4-4.7s-3 1.3-3 1.3v-1.1z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</template>



<style scoped>

</style>
