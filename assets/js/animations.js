import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/all";


gsap.registerPlugin(ScrollTrigger)

gsap.to("#card1", {
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    

    scrollTrigger:"#projects"
})

gsap.to("#card2", {
    y:0,
    opacity:1,
    duration:1,
    rotate:0,
    scrollTrigger:"#projects"
})

gsap.to("#card3", {
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    
    scrollTrigger:"#projects"
})

gsap.to("#card4", {
    y:0,
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    delay:.3,
    scrollTrigger:"#projects2"
    
})

gsap.to("#card5", {
    y:0,
    x:0,
    opacity:1,
    duration:1,
    rotate:0,

    scrollTrigger:"#projects2"
})

gsap.to("#card6", {
    y:0,
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    delay:.3,
    scrollTrigger:"#projects2"
})

for(let i = 1;i<=5;i++){
gsap.to(`#experience-date${i}`, {
    y:0,
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    delay:.3,
    scrollTrigger:"#experience"
})

gsap.to(`#experience-title${i}`, {
    y:0,
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    delay:.3,
    scrollTrigger:"#experience"
})

gsap.to(`#experience-company${i}`, {
    y:0,
    x:0,
    opacity:1,
    duration:1,
    rotate:0,
    delay:.3,
    scrollTrigger:"#experience"
})

}
