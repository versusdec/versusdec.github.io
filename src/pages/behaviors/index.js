import styles from './styles.module.scss'
import { Logo } from "@netpeak/elements/logo"
import { Chevron } from "@netpeak/elements/chevron"
import { useRouter } from "next/dist/client/compat/router"
import { useState } from "react"
import Link from "next/link"
import { useQuizContext } from "@netpeak/contexts/quiz-context";
import { withQuizGuard } from "@netpeak/hoc/with-quiz-guard"

const Page = withQuizGuard(() => {
    const router = useRouter()
    const {data, setData} = useQuizContext()
    const [values, setValues] = useState(data.behavior || [])
    
    return (
      <>
        <header id={'header'} className={styles.header}>
          <Link href={'/measures'}><Chevron/></Link> <Logo/>
        </header>
        <main className={styles.main}>
          <div className={'quiz-top ' + styles.quizTop}>
            <h2>Destructive behaviors</h2>
            <p>We all have them! Which are yours?</p>
          </div>
          <div className={styles.list}>
            <label className={styles.item}>
              <input type="checkbox"
                     checked={values.includes('rest')}
                     onChange={(e) => {
                       if (e.target.checked) setValues(prev => ([...prev, 'rest']))
                       else if (values.includes('rest')) {
                         const arr = [...values]
                         arr.splice(arr.indexOf('rest'), 1)
                         setValues(arr)
                       }
                     }}/>
              <div className={styles.wrap}>
                <div className={styles.image}>
                  <img src="/assets/icons/moon.svg" alt=""/>
                </div>
                <span>
              I don't rest enough
            </span>
              </div>
            </label>
            <label className={styles.item}>
              <input type="checkbox"
                     checked={values.includes('sweet')}
                     onChange={(e) => {
                       if (e.target.checked) setValues(prev => ([...prev, 'sweet']))
                       else if (values.includes('sweet')) {
                         const arr = [...values]
                         arr.splice(arr.indexOf('sweet'), 1)
                         setValues(arr)
                       }
                     }}/>
              <div className={styles.wrap}>
                <div className={styles.image}>
                  <img src="/assets/icons/donut.svg" alt=""/>
                </div>
                <span>
              I have a sweet tooth
            </span>
              </div>
            </label>
            <label className={styles.item}>
              <input type="checkbox"
                     checked={values.includes('soda')}
                     onChange={(e) => {
                       if (e.target.checked) setValues(prev => ([...prev, 'soda']))
                       else if (values.includes('soda')) {
                         const arr = [...values]
                         arr.splice(arr.indexOf('soda'), 1)
                         setValues(arr)
                       }
                     }}/>
              <div className={styles.wrap}>
                <div className={styles.image}>
                  <img src="/assets/icons/soda.svg" alt=""/>
                </div>
                <span>
              I have too much soda
            </span>
              </div>
            </label>
            <label className={styles.item}>
              <input type="checkbox"
                     checked={values.includes('salt')}
                     onChange={(e) => {
                       if (e.target.checked) setValues(prev => ([...prev, 'salt']))
                       else if (values.includes('salt')) {
                         const arr = [...values]
                         arr.splice(arr.indexOf('salt'), 1)
                         setValues(arr)
                       }
                     }}/>
              <div className={styles.wrap}>
                <div className={styles.image}>
                  <img src="/assets/icons/salt.svg" alt=""/>
                </div>
                <span>
              I eat many salty foods
            </span>
              </div>
            </label>
            <label className={styles.item}>
              <input type="checkbox"
                     checked={values.includes('snack')}
                     onChange={(e) => {
                       if (e.target.checked) setValues(prev => ([...prev, 'snack']))
                       else if (values.includes('snack')) {
                         const arr = [...values]
                         arr.splice(arr.indexOf('snack'), 1)
                         setValues(arr)
                       }
                     }}/>
              <div className={styles.wrap}>
                <div className={styles.image}>
                  <img src="/assets/icons/pizza.svg" alt=""/>
                </div>
                <span>
              I enjoy midnight snacks
            </span>
              </div>
            </label>
            <label className={styles.item}>
              <input type="checkbox"
                     checked={values.includes('none')}
                     onChange={(e) => {
                       if (e.target.checked) setValues(prev => ([...prev, 'none']))
                       else if (values.includes('none')) {
                         const arr = [...values]
                         arr.splice(arr.indexOf('none'), 1)
                         setValues(arr)
                       }
                     }}/>
              <div className={styles.wrap}>
                <div className={styles.image}>
                  <img src="/assets/icons/cross.svg" alt=""/>
                </div>
                <span>
             None of the above
            </span>
              </div>
            </label>
          
          </div>
          <button type={'button'}
                  className={styles.btn + ' btn-next'}
                  disabled={!values.length}
                  onClick={() => {
                    setData({behavior: values})
                    router.replace('/exercise')
                  }}>
            Continue
          </button>
        </main>
      </>
    )
  }
)

export default Page