import { useCallback, useEffect, useState } from 'react'
import { useRouter } from 'next/navigation'
import { useQuizContext } from "../contexts/quiz-context"
import PropTypes from 'prop-types'

export const QuizGuard = (props) => {
  const {children} = props
  const router = useRouter()
  const [checked, setChecked] = useState(false)
  const {data} = useQuizContext()
  
  const check = useCallback(() => {
    if (data.goal) setChecked(true)
    else router.replace('/')
  }, [data, router]);
  
  useEffect(() => {
    check()
  }, [data, check])
  
  if (!checked)
    return null
  
  return <>{children}</>
};

QuizGuard.propTypes = {
  children: PropTypes.node
};
