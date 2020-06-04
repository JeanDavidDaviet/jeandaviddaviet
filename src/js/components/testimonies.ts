import { tns } from "../../../node_modules/tiny-slider/src/tiny-slider";

const testimonies = document.querySelector('.testimonies') as HTMLDivElement;
const testimonyList = document.querySelectorAll('.testimony') as NodeListOf<HTMLDivElement>;

if(testimonies != null && testimonyList.length){
  const slider = tns({
    container: '.testimony-slider',
    items: 1,
    slideBy: 'page',
    loop: false,
    autoplay: false,
    autoHeight: true,
    nav: false,
    controlsContainer: testimonies.querySelector('.testimonies-controls')
  });
}
