import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/all";


gsap.registerPlugin(ScrollTrigger)

// project section 1
for(let i = 0;i<=3;i++)
{
gsap.to(`#card${i}`, {
    x:0,
    y:0,
    opacity:1,
    duration:1,
    rotate:0,
    

    scrollTrigger:"#projects"
})
}

// project section 2
for(let i = 4;i<=6;i++)
    {
    gsap.to(`#card${i}`, {
        x:0,
        y:0,
        opacity:1,
        duration:1,
        rotate:0,
        
    
        scrollTrigger:"#projects2"
    })
    }


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


gsap.to(`.skills__border`, {
    x:0,
    y:0,
    opacity:1,
    duration:1,
    rotate:0,
    

    scrollTrigger:"#skills"
})
