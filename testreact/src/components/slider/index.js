import React, {useEffect, useRef, useState} from "react";
import Styles from './styles.module.scss';
import cx from 'classnames';

export const Slider = ({slides}) => {
    const [active, setActive] = useState(0);
    const [screen, setScreen] = useState(window.innerWidth);
    const ref = useRef(null)
    const bullets = [];
    let slidesCount = slides.length;
    window.addEventListener('resize', () => {
        setScreen(window.innerWidth)
    });
    const slidesJSX = slides.map((slide, i) => {
        const bulletCX = cx({
            [Styles.bullet]: true,
            [Styles.active]: active === i
        });

        bullets.push(<div className={bulletCX} onClick={() => {
            setActive(i)
        }} key={Math.floor(Math.random() * 1000000)}></div>)
        return (
          <div className={Styles.slide} key={Math.floor(Math.random() * 1000000)}>
              <h3>{slide.title}</h3>
              <p>{slide.text}</p>
              <div className={Styles.footer}>
                  {slide.time && <time>{slide.time}</time>}
                  {slide.link && <a href={slide.link} className={Styles.read}>Читать</a>}
              </div>
          </div>
        )
    });

    useEffect(() => {
        ref.current.style.transform = `translateX(-${ref.current.getBoundingClientRect().width * active}px)`

    }, [active, screen])

    const usePrev = () => {
        if (active !== 0)
            setActive(active - 1)
    }

    const useNext = () => {
        if (active !== slidesCount - 1)
            setActive(active + 1)
    }

    const sliderCX = cx({
        "slider": true,
        [Styles.slider]: true
    })

    return (<>
        <div className={sliderCX}>
            <div className={Styles.sliderWrapper}>
                <div className={Styles.sliderInner} ref={ref}>
                    {slidesJSX}
                </div>
            </div>
            <div className={Styles.controls}>
                <div className={Styles.pagination}>
                    {bullets}
                </div>
                <div>
                    <button dataprev={''} onClick={usePrev}></button>
                    <button datanext={''} onClick={useNext}></button>
                </div>
            </div>
        </div>
    </>)
}