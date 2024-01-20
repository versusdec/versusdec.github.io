import '@netpeak/styles/globals.scss'
import { Inter } from "next/font/google";
import { QuizProvider } from '@netpeak/contexts/quiz-context'

const inter = Inter({subsets: ['latin']})

export default function App({Component, pageProps}) {
  return <>
    <QuizProvider>
      <div className={`${inter.className}`}>
        <Component {...pageProps} />
      </div>
    </QuizProvider>
  </>
}
