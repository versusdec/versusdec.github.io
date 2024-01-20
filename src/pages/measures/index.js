import styles from './styles.module.scss'
import { Logo } from "@netpeak/elements/logo"
import { Chevron } from "@netpeak/elements/chevron"
import { useRouter } from "next/dist/client/compat/router"
import { useState } from "react"
import Link from "next/link"
import { useQuizContext } from "@netpeak/contexts/quiz-context"
import {withQuizGuard} from "@netpeak/hoc/with-quiz-guard"

const Page = withQuizGuard(()=>{
  const router = useRouter()
  const {data, setData} = useQuizContext()
  const initialValues = {...data}
  !initialValues.height ? initialValues.height = '' : void 0
  !initialValues.weight ? initialValues.weight = '' : void 0
  const [values, setValues] = useState(initialValues)
  const [active, setActive] = useState(data.units || 'imperial')
  
  return (
    <>
      <header id={'header'} className={styles.header}>
        <Link href={'/'}><Chevron/></Link> <Logo/>
      </header>
      <main className={styles.main}>
        <div className={styles.switch}>
          <div className={active === 'imperial' ? styles.active : ''}
               onClick={() => {
                 setActive('imperial')
               }}>
            imperial
          </div>
          <div className={active === 'metric' ? styles.active : ''}
               onClick={() => {
                 setActive('metric')
               }}>
            metric
          </div>
        </div>
        <div className={styles.inputs}>
          <div className={styles.input}>
            <input type="number"
                   value={values.height || ''}
                   onChange={(e) => {
                     setValues(prev => ({...prev, height: e.target.value}))
                   }}
            />
            <label>Height {active === 'imperial' ? '(ft)' : '(cm)'}</label>
          </div>
          <div className={styles.input}>
            <input type="number"
                   value={values.weight || ''}
                   onChange={(e) => {
                     setValues(prev => ({...prev, weight: e.target.value}))
                   }}
            />
            <label>Weight {active === 'imperial' ? '(lb)' : '(kg)'}</label>
          </div>
        </div>
        <div className={'quiz-top ' + styles.quizTop}>
          <h2>Measure Yourself</h2>
          <p>What are your height and body weight? </p>
        </div>
        <button type={'button'}
                className={styles.btn + ' btn-next'}
                disabled={values.height === '' || values.weight === ''}
                onClick={() => {
                  setData({...values, units: active})
                  router.replace('/behaviors')
                }}>
          Continue
        </button>
      </main>
    </>
  )
})

export default Page