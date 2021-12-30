import React from "react";
import Button from "../../elements/btn";
import Styles from './styles.module.scss';
import cx from "classnames";

export const Card = ({content}) => {

    const cardCX = cx({
        'card': true,
        [Styles.card]: true
    })

    return (
      <div className={cardCX} key={Math.floor(Math.random() * 1000)}>
          <div className={Styles.img}>
              {content.icon}
          </div>
          <div className={Styles.desc}>
              <h3>{content.title}</h3>
              <p>{content.text}</p>
              <Button href={content.link} className="secondary">Детальнее</Button>
          </div>
      </div>
    )
}