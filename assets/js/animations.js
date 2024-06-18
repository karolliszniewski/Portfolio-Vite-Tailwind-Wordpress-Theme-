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
    x:0,
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