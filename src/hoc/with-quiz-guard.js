import { QuizGuard } from '../guards/quiz-guard'

export const withQuizGuard = function (Component) {
  return function guard (props) {
    return <QuizGuard>
      <Component {...props} />
    </QuizGuard>
  }
}
