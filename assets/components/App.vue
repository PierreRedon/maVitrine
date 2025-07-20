<script setup>
import Header from './Header.vue'
import Footer from './Footer.vue'
import HeroSection from './HeroSection.vue'
import APropos from './APropos.vue'
import Projects from './Projects.vue'
import ProjetPhare from "./ProjetPhare.vue";
import Skills from "./Skills.vue";
import Contacte from "./Contacte.vue";

import { onMounted, ref } from 'vue'
import { gsap } from 'gsap'

const isMobile = ref(false)

onMounted(() => {
    // Détection mobile simple
    isMobile.value = window.innerWidth <= 768

    if (!isMobile.value) {
        const trail = document.querySelector('.trail')
        let mouseX = 0
        let mouseY = 0

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX
            mouseY = e.clientY
        })

        gsap.ticker.add(() => {
            gsap.to(trail, {
                x: mouseX - 6,
                y: mouseY - 6,
                duration: 0.2,
                ease: 'power2.out'
            })
        })
    }
})
</script>

<template>
    <div v-if="!isMobile" id="magic-cursor">
        <div class="trail"></div>
    </div>

    <Header />
    <main class="bg-[#0B0F1A]">
        <HeroSection />
        <APropos />
        <ProjetPhare />
        <Projects />
        <Skills />
        <Contacte />
    </main>
    <Footer />
</template>


<style scoped>
#magic-cursor {
    position: fixed;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: 9999;
}

.trail {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: radial-gradient(circle, #ffd700, #ffcc00);
    box-shadow: 0 0 12px 4px #ffd700;
    position: absolute;
    top: 0;
    left: 0;
}
</style>
