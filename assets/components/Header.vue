<script setup>
import { ref } from 'vue'

const isOpen = ref(false)

const toggleMenu = () => {
    isOpen.value = !isOpen.value
}
</script>

<template>
    <nav class="bg-[#0B0F1A] text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <h1 class="text-xl font-bold text-yellow-400"><a href="#hero">Pierre Redon | Développeur web</a></h1>

            <!-- Menu desktop -->
            <div class="hidden md:flex gap-4 items-center">
                <a href="#apropos" class="nav-link">À propos</a>
                <a href="#Projetphare" class="nav-link">Projet phare</a>
                <a href="#projet" class="nav-link">Projets</a>
                <a href="#competences" class="nav-link">Compétences</a>
                <a href="#contact" class="nav-link bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold shadow-md">
                    Contact
                </a>
            </div>

            <!-- Burger pour mobile -->
            <button @click="toggleMenu" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path :d="isOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'" />
                </svg>
            </button>
        </div>

        <!-- Menu mobile -->
        <transition name="fade-slide">
            <div v-if="isOpen" class="md:hidden bg-[#161D2A] px-4 pb-4 flex flex-col gap-2">
                <a href="#apropos" @click="isOpen = false" class="nav-link">À propos</a>
                <a href="#Projetphare" @click="isOpen = false" class="nav-link">Projet phare</a>
                <a href="#projet" @click="isOpen = false" class="nav-link">Projets</a>
                <a href="#competences" @click="isOpen = false" class="nav-link">Compétences</a>
                <a href="#contact" @click="isOpen = false" class="nav-link bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold text-center shadow-md">
                    Contact
                </a>
            </div>
        </transition>
    </nav>
</template>

<style scoped>
.nav-link {
    @apply px-4 py-2 rounded hover:bg-[#3F4C6B] transition duration-200;
}

.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: all 0.3s ease;
}
.fade-slide-enter-from {
    opacity: 0;
    transform: translateY(-10px);
}
.fade-slide-enter-to {
    opacity: 1;
    transform: translateY(0);
}
.fade-slide-leave-from {
    opacity: 1;
    transform: translateY(0);
}
.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(-10px);
}
</style>
