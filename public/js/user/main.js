gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray(".panel");

const scrollTween = gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".pathaway_excellence",
        pin: true,
        scrub: 1,
        end: () =>
            "+=" + document.querySelector(".pathaway_excellence").offsetWidth,
    },
});

const pathawayClassList = [
    {
        img: "exploration_pathaway_img",
        text: "exploration_pathaway_text",
        progress: "exploration_pathaway_progress",
        container: "exploration_pathaway",
    },
    {
        img: "profile_building_pathaway_img",
        text: "profile_building_pathaway_text",
        progress: "profile_building_pathaway_progress",
        container: "profile_building_pathaway",
    },
    {
        img: "academic_pathaway_img",
        text: "academic_pathaway_text",
        progress: "academic_pathaway_progress",
        container: "academic_pathaway",
    },
    {
        img: "writing_pathaway_img",
        text: "writing_pathaway_text",
        progress: "writing_pathaway_progress",
        container: "writing_pathaway",
    },
];

pathawayClassList.forEach((item) => {
    gsap.to(`.${item.text}`, {
        opacity: 100,
        y: !window.matchMedia("(max-width: 1024px)").matches ? 0 : 200,
        duration: 2,
        ease: "power4.out",
        scrollTrigger: {
            trigger: `.${item.container}`,
            start: "left 50%",
            end: "left -50%",
            containerAnimation: scrollTween,
            toggleActions: "play reset play reset",
        },
    });
    gsap.to(`.${item.img}`, {
        opacity: 1,
        duration: 1,
        ease: "power4.out",
        scrollTrigger: {
            trigger: `.${item.container}`,
            start: "left 50%",
            end: "left -50%",
            containerAnimation: scrollTween,
            toggleActions: "play reset play reset",
        },
    });
    gsap.to(`.${item.progress}`, {
        value: 100,
        ease: "none",
        scrollTrigger: {
            trigger: `.${item.container}`,
            start: "left 50%",
            end: "left -50%",
            containerAnimation: scrollTween,
            toggleActions: "play complete play reverse",
            scrub: 0.01,
        },
    });
});
