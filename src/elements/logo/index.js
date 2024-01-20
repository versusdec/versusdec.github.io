import styles from './styles.module.scss'
import Image from "next/image";

export const Logo = () => {
  
  return (
    <>
      <div className={styles.logo}>
        <Image src={'/assets/icons/logo.svg'}
               width={34}
               height={34}
               alt={''}
        />
        Food Mentor
      </div>
    </>
  )
}

