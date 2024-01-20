import styles from './styles.module.scss'
import PropTypes from 'prop-types'

export const Goal = ({title, image, onClick, ...rest}) => {
  
  return (
    <div className={`${styles.item} ${onClick ? styles.cur : ''}`} onClick={onClick} {...rest}>
      <h4>{title}</h4>
      <div className={styles.image}>
        {image}
      </div>
    </div>
  )
}

Goal.propTypes = {
  title: PropTypes.string.isRequired,
  image: PropTypes.element,
  onClick: PropTypes.func
}