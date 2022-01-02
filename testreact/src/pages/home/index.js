import React from 'react';
import {Header} from "../../components/header";
import {Slider} from "../../components/slider";
import {Card} from "../../components/card";
import Button from "../../elements/btn";
import {slides} from "../../temp";
import {services} from "../../temp";
import {Swiper, SwiperSlide} from 'swiper/react';
import {Autoplay} from 'swiper';
import 'swiper/css';
import './styles.scss';
import arrow from '../../img/totop.svg'
import slide1 from '../../img/laptop.png'
import slide2 from '../../img/slide2.jpg'
import slide3 from '../../img/slide3.jpg'
import strp from '../../img/rectangle.png'

export const Home = () => {
    const goTop = () => {
        window.scrollTo({behavior: 'smooth', top: 0})
    }

    return (
      <>
          <Header/>
          <main>
              <div className="top" onClick={goTop}>
                  <img src={arrow} alt=""/>
                  to top
              </div>
              <div className="land-wrapp">
                  <section className="land" id={'about'}>
                      <div className="articles">
                          <Slider slides={slides}/>
                      </div>
                  </section>
                  <div className="swiper-cont">
                      <div className="strp">
                          <img src={strp} alt=""/>
                      </div>

                      <Swiper
                        direction={'vertical'}
                        modules={[Autoplay]}
                        autoplay={{
                            delay: 3000,
                            loop: true,
                            infinite: true
                        }}
                        slidesPerView={1}
                      >
                          <SwiperSlide>
                              <img src={slide1} alt=""/>
                          </SwiperSlide>
                          <SwiperSlide>
                              <img src={slide2} alt=""/>
                          </SwiperSlide>
                          <SwiperSlide>
                              <img src={slide3} alt=""/>
                          </SwiperSlide>
                      </Swiper>

                  </div>
              </div>
              <section id="services">
                  <div className={'list'}>
                      {services.map(item => (<Card content={item} key={Math.floor(Math.random() * 1000)}/>))}
                  </div>
                  <Button className={'square'}>ВСЕ УСЛУГИ</Button>
              </section>
              <div id="contacts">
                  <div className="bg"></div>
                  <section>
                      <header>
                          <h3>ИНФОРМАЦИЯ</h3>
                          <h4>О НАС</h4>
                          <p>О НАС -01</p>
                      </header>
                      <div className="content">
                          <p>
                              Вас приветствует дружелюбная и креативная команда. Если Вам необходимо решение для бизнеса в формате эффективного сайта, мы хотим предложить свой опыт. Более 6-ти лет наше агентство разрабатывает интернет-магазины, корпоративные сайты, каталоги, онлайн сервисы и другие
                              ресурсы для украинского рынка и ближнего зарубежья.
                          </p>
                          <p>
                              Каждому своему клиенту мы можем предложить налаженный сервис и современные технические решения. Наши специалисты работают для Вас в удаленном формате, но мы всегда плотно поддерживаем связь с заказчиком – и процесс разработки становится абсолютно прозрачным и
                              эффективным
                              для обеих сторон. К примеру, Вы можете следить за выполнением задач по проекту через CRM систему или поддерживать связь с личным менеджером Swipex в Skype, по телефону.
                          </p>
                          <p>
                              Мы – веб студия полного цикла, поскольку выполняем проекты с нуля, когда у вас есть только лишь идея и большое желание воплотить ее в работающий бизнес проект. Сотрудники Swipex помогут Вам создать правильное техническое задание для интернет ресурса, дизайнеры
                              поработают
                              над актуальным визуальным представлением, а разработчики реализуют задачи на современной и гибкой платформе.
                          </p>
                      </div>
                  </section>
              </div>
          </main>
      </>
    )
}
