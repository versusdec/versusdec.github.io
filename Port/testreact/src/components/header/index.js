import React from "react";
import Styles from './styles.module.scss'
import Button from "../../elements/btn";

export const Header = () => {

    const scrollTo = function (e) {
        e.preventDefault();
        let target = false;
        try {
            target = document.getElementById(e.target.getAttribute('href').split('#')[1]);
        } catch (e) {
        }

        target && target.scrollIntoView({behavior: 'smooth', block: 'center'})
    }

    return (<>
        <header className={Styles.header} id={'header'}>
            <div className={Styles.headerInner}>
                <nav>
                    <ul>
                        <li><a onClick={scrollTo} href="#about">О КОМПАНИИ</a></li>
                        <li><a onClick={scrollTo} href="#services">УСЛУГИ</a></li>
                        <li><a onClick={scrollTo} href="#portfolio">ПОРТФОЛИО</a></li>
                        <li><a onClick={scrollTo} href="#contacts">КОНТАКТЫ</a></li>
                        <li><a onClick={scrollTo} href="#solutions">ГОТОВЫЕ РЕШЕНИЯ</a></li>
                    </ul>
                </nav>
                <div className={Styles.buttonsWrapper}>
                    <Button><i className="account"></i>АВТОРИЗАЦИЯ</Button>
                    <Button><i className="key"></i>РЕГИСТРАЦИЯ</Button>
                </div>
            </div>
        </header>
    </>)
}