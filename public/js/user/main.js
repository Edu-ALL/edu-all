gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray(".panel");

const scrollTween = gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".pathaway_excellence",
        pin: true,
        scrub: 1,
        snap: 1 / (sections.length - 1),
        end: () =>
            "+=" + document.querySelector(".pathaway_excellence").offsetWidth,
    },
});

const pathawayClassList = [
    {
        img: "exploration_pathaway_img",
        container: "exploration_pathaway",
    },
    {
        img: "profile_building_pathaway_img",
        container: "profile_building_pathaway",
    },
    {
        img: "academic_pathaway_img",
        container: "academic_pathaway",
    },
    {
        img: "writing_pathaway_img",
        container: "writing_pathaway",
    },
];

pathawayClassList.forEach((item) => {
    gsap.to(`.${item.img}`, {
        opacity: 1,
        duration: 0.7,
        scrollTrigger: {
            trigger: `.${item.container}`,
            start: "left 60%",
            end: "left -40%",
            containerAnimation: scrollTween,
            toggleActions: "play reset play reset",
        },
    });
});
