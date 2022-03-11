import dynamic from "next/dynamic";
import react from "react";
import 'tiny-slider/dist/tiny-slider.css';

const Testimonies = ({ testimonies }) => {
    const TinySlider = dynamic(
        () => import('tiny-slider-react'),
        { ssr: false }
    )
    
    const controls = react.createRef();

    const settings = {
        items: 1,
        slideBy: 'page',
        loop: false,
        autoplay: false,
        autoHeight: true,
        nav: false,
        controlsContainer: controls.current
    };

    console.log(controls.current);

    return (
        <div className="testimonies">
            <div className="testimonies-controls" ref={controls}>
                <svg className="testimony-arrow testimony-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
                <svg className="testimony-arrow testimony-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
            </div>
    
            <TinySlider settings={settings}>
                {testimonies.map((testimony, index) => (
                    <div key={index} className="testimony">
                        <div dangerouslySetInnerHTML={{ __html: testimony.content.rendered }}></div>
                    </div>
                ))}
            </TinySlider>
        </div>
    )
    
}

export default Testimonies;