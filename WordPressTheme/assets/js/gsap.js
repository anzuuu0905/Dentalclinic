"use script";
// gsap.fromTo(
//   ".js-mv__text",
//   {
//     x: "-50%",
//     opacity: 0,
//   },
//   {
//     x: 0,
//     dulation: 0.5,
//     ease: "bounce.out",
//     opacity: 1,
//   }
// );

var textWrap = document.querySelectorAll(".js-mv__text");
textWrap.forEach(
  (t) => (t.innerHTML = t.textContent.replace(/\S/g, "<span>$&</span>"))
); //スペースを無しにする

gsap.fromTo(
  ".js-mv__text span",
  {
    opacity: 0,
    x: "-10px",
    scale: 5,
  },
  {
    scale: 1,
    x: 0,
    // ease: "bounce.out",
    opacity: 1,
    stagger: 0.2,
  }
);
