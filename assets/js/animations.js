import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/all";


gsap.registerPlugin(ScrollTrigger)

gsap.to("#card1", {
    x:0,
    opacity:1,
    duration:2,
    rotate:0,
    scrollTrigger:"#projects"
})