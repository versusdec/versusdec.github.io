import React from 'react';

import Styles from './styles.module.scss'

import cx from 'classnames'
import {useNavigate} from "react-router";

const Button = ({children, className, href, element, onclick, target, ...props}) => {
    const navigate = useNavigate();

    const buttonCX = cx(Styles[className] ? Styles[className] : className, {
        [Styles.btn]: href
    });

    const clickHandler = () => {
        if (props.disabled)
            return false;

        if (onclick)
            onclick();

        if (href)
            target ? window.open(href, target) : navigate(href);

    }

    const Btn = () => {
        return <button className={buttonCX} onClick={clickHandler} {...props}>{children}</button>
    }

    return (
      <Btn/>
    )
}

export default Button